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
        $this->middleware('auth', ['except' => ['index', 'show']]);
//        $this->authorizeResource(Project::class, 'projects');
    }

    public function index()
    {
        $projects = Project::all();
        return view('project.index', ['projects' => $projects]);
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

    }

    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

}
