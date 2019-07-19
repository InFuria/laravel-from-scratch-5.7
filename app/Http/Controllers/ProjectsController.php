<?php

namespace App\Http\Controllers;

use App\Events\ProjectCreated;
use App\Project;
use Illuminate\Support\Facades\Mail;
use \Validator;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        try{

            //$project = auth()->user()->projects;

            //$projects = Project::where('owner_id', auth()->id())->get();


            /*cache()->rememberForever('stats', function (){
                return ['lessons' => 1300, 'hours' => 50000, 'series' => 100];
            });

            $stats = cache()->get('stats');
            dump($stats);*/

            //return view('projects.index', compact('projects'));

            return view('projects.index', [
                'projects' => auth()->user()->projects
            ]);

        }catch (\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }


    public function create(Request $request)
    {
        try{

            /*if (!$request->user()->authorizeRoles(['admin']))
                return redirect()->back();*/

            return view('projects.create');

        }catch (\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }


    public function store(Request $request)
    {
        try{

            $attributes = $this->validateProject();

            $attributes['owner_id'] = auth()->id();

            $project = Project::create($attributes);

            //event(new ProjectCreated($project));

            return redirect('/projects');

        }catch (\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }


    public function show(Project $project)
    {
        try{

            //abort_if($project->owner_id != auth()->id(), 404);


            //abort_unless(auth()->user()->owns($project), 403);


            //$this->authorize('view', $project);

            return view('projects.show', compact('project'));

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }


    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }


    public function update(Request $request, Project $project)
    {
        $project->update($this->validateProject());

        return redirect('projects');
    }


    public function destroy(Project $project)
    {
        try {

            $project->delete();

            return redirect('/projects');

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }


    public function validateProject()
    {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);
    }

}
