<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use App\Http\Requests\ProjectRequest;
use function array_merge;

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
        $images = []; //Image::all();
        $projects = Project::all();

        foreach ($projects as $project) {

            $images = array_merge($images, ['image' . $project->id => $project->images->firstWhere('project_id', $project->id)->filepath]);
        }
        return view('project.index', ['projects' => $projects, 'images' => $images]);
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
        $filePath = $request->file('filename')->storeAs('public/project_images', $project->id);

        $projectAttributes = [
            'title' => $request->get('title'),
            'information' => $request->get('information'),
            'buyer' => $request->get('buyer'),
            'address' => $request->get('address'),
            'year' => $request->get('year'),
        ];
        dd($project);
        $project = $project->fill($projectAttributes)->save();

        $fixedFilePath = explode('/', $filePath);

        $project->images()->save(new Image(['filepath' => $fixedFilePath[1]]));

        return redirect()->route('projects.index');

    }

    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

}
