<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Models\AdminModel;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    
   public function index(Request $request)
   {
      if($request->session()->has('ADMIN_LOGIN')){
         return redirect('admin/dashboard');  
      }
     else
     {
         return view('admin/login');
     }
      return view('admin/login');
   }
   public function auth(Request $request)
   {
       $email= $request->post('email');
       $password= $request->post('password');
       $result = AdminModel::where(['email'=>$email])->first();
      
            if($result)
            {
               if(Hash::check($request->post('password'),$result->password))
                                      {
                                          $request->session()->put('ADMIN_LOGIN',true);
                                           $request->session()->put('ADMIN_ID',$result->id);
                                          
                                          return redirect('admin/dashboard');
                                      }                         
                                       else
                                       {
                                           $request->session()->flash('error','please enter correct password');
                                           return redirect('admin/login');
                                       }
            }
}
   public function Dashboard()
   {
      return view('admin/dashboard');
   }
//    public function updatepassword()
//    {
//       $r= AdminModel::find(1);
//       $r->password=Hash::make('bahimaek');
//       $r->save();
//    }



   public function logout()
{
    if(session()->has("ADMIN_LOGIN"))
    {
        //here user session id is taken 
        session()->pull("ADMIN_LOGIN");
    }
    // redirect to homepage("/")
    return redirect("admin/login");

}
  public function matches()
  {
     $data=DB::select('select * from matches');
    //  return view('admin/matches',['data'=>$data]);
    //  $data = DB::table('matches')
    //         ->join('team', 'matches.team1_id','=', 'team.id')
    //         ->join('team', 'matches.team2_id','=', 'team.id')
    //         ->select('matches.id',  'team.name as team1_id')
    //         ->select('matches.id',  'team.name as team2_id')
    //         ->get();

        return view('admin/matches', ['data' => $data]);
  }

public function practices()
{
    $data=DB::select('select * from practices');
    return view('admin/practices', ['data' => $data]);
}

public function attendence_status()
{
    $data=DB::select('select * from attendence');
    return view('admin/attendence', ['data' => $data]);
}

}

?>