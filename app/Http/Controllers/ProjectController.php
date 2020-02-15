<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('project');
    }

    public function create()
    {
        return view('project._create');
    }

    public function store(ProjectRequest $request)
    {
        return $this->update($request, new Project());
    }

    public function update(ProjectRequest $request, Project $project)
    {
        $project->fill($request->validated())->save();

        return redirect()->route('projects.index');

//        $project->title = $request->get('title');
//        $project->information = $request->get('information');
//        $project->metal = $request->get('metal');
//        $project->buyer = $request->get('buyer');
//        $project->address = $request->get('address');
//        $project->year = $request->get('year');
//
//        $project->save();

//        return redirect(action([ProjectController::class, 'index']));
    }
}
