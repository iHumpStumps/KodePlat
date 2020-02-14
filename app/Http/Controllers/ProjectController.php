<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('project');
    }

    public function create(){
        return view('project._create');
    }

    public function store(Request $request){
        return $this->update($request, new Project());
    }

    public function update(Request $request, Project $project){
        $project->title = $request->get('title');
        $project->information = $request->get('information');
        $project->metal = $request->get('metal');
        $project->buyer = $request->get('buyer');
        $project->address = $request->get('address');
        $project->year = $request->get('year');

        $project->save();

        return redirect('/project');
    }
}
