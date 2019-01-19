<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class ProjectsController extends Controller{
    //enter manage page
    public function managePage(){
        $projects = Project::all();
        return view('projectManage',[
            'projects'=>$projects
        ]);
    }

    //ajax
    public function getProject($id){
        $project = Project::find($id);//find by project ID
        return response()->json(array('project'=> $project), 200);
    }

    public function edit(Request $request){

        return redirect()->route("adminProject");
    }
}
