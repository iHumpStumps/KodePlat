<?php

namespace App\Http\Controllers;

use App\Models\Image;
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
        $filePath = $request->file('filename')->store('public');

        $projectAttributes = [
            'title' => $request->get('title'),
            'information' => $request->get('information'),
            'metal' => $request->get('metal'),
            'buyer' => $request->get('buyer'),
            'address' => $request->get('address'),
            'year' => $request->get('year'),
        ];

        $project->fill($projectAttributes)->save();

        $project->images()->save(new Image(['filepath' => $filePath]));

        return redirect()->route('projects.index');

    }

    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

}
