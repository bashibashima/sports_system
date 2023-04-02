<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\PlayersModel;
use App\Models\TeamModel;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{
    public function index1()
    {
        return view('users/index');
    }
    public function index()
    {
        if($request->session()->has('USER_LOGIN')){
            return redirect('users/userdashboard');  
         }
        else
        {
            return view('users/index');
        }
        
      return view('users/index');
    }
    public function auth(Request $request)
    {
        $email= $request->post('email');
        $password= $request->post('password');
        $result = PlayersModel::where(['email'=>$email])->first();
       
             if($result)
             {
                if(Hash::check($request->post('password'),$result->password))
                                       {
                                           $request->session()->put('USER_LOGIN',true);
                                            $request->session()->put('USER_ID',$result->id);
                                           
                                           return redirect('users\userdashboard');
                                       }                         
                                        else
                                        {
                                            $request->session()->flash('error','please enter correct password');
                                            return redirect('users/playerlogin');
                                        }
             }
 }
 public function dashboard()
 {
    return view('users\userdashboard');
 }

 public function logout()
 {
     if(session()->has("USER_LOGIN"))
     {
         //here user session id is taken 
         session()->pull("USER_LOGIN");
     }
     // redirect to homepage("/")
     return redirect("users/playerlogin");
 
 }

 //bashi.....
 public function players()
 {
    $players = DB::table('players')
            ->join('team', 'players.team_id', '=', 'team.id')
            ->select('players.id', 'players.name', 'team.name as team_id')
            ->get();

        return view('admin/players/players', ['players' => $players]);

     //return view('admin/players/players');
 }

 public function Add_players()
 {
      $data=TeamModel::all();
      
     return view('admin/players/add')->with('datas',$data);
 }

 public function store_players(Request $request)
 {
        // Validate the request data
       $validatedData = $request->validate([
        'team_id' => 'required|exists:team,id',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:players,email',
        'dob' => 'required|date',
        'password' => 'required|string|min:8',
        
                                             ]);

        // Insert the player data into the database
       DB::table('players')->insert([
        'team_id' => $validatedData['team_id'],
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'dob' => $validatedData['dob'],
        'password' => $validatedData['password']
                                     ]);
        return view('admin/players/player');
    }


    public function delete($id)
    {
        $data=PlayersModel::findOrFail($id);
        $data->delete();
        //return view('admin/players/players');
    }
}
?>
