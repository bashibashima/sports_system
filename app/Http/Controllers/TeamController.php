<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamModel;
class TeamController extends Controller
{

    public function team()
    {
        $data=TeamModel::all();
       // return view('admin/Coursedetails')->with('datas',$data);
        return view('admin/teams/team')->with('datas',$data);
    }

    public function Add_team()
    {
        return view('admin/teams/add');
    }

    public function store(Request $request)
    {


          $con=$request->post("name");
           if(TeamModel::where('name','=',$con)
                   ->exists())
           {
                   return back()->with("errorMessage", "Record already exist");
       
            }
           else{

            $this->validate($request, [
                                         'name' => 'required',
                             ]);

            $data = $request->all();
            TeamModel::create($data);
            return view('admin/teams/team');
              //return redirect('teams/add')->with('success', 'Team created successfully!');
                            }
    }

    public function edit($id)
    {
       
         $data=TeamModel::findOrFail($id);
         
        return view('admin/teams/edit', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $data=TeamModel::findOrFail($id);
        $data->name=$request->input('name');
        $data->save();
        return view('admin/dashboard');
        
    }

    public function delete($id)
    {
        $data=TeamModel::findOrFail($id);
        $data->delete();
        //return view('admin/teams/team');
        return view('admin/dashboard');
    } 
}
?>
