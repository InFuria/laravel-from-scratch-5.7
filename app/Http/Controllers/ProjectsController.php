<?php

namespace App\Http\Controllers;

use App\Project;
use \Validator;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index()
    {
        try{

            $projects = Project::all();
            return view('projects.index', compact('projects'));

        }catch (\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }

    public function create()
    {
        try{

            return view('projects.create');

        }catch (\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }

    public function store(Request $request)
    {
        try{

            $validate = Validator::make(request()->all(), [
                'title' => ['required', 'min:3', 'max:255'],
                'description' => ['required', 'min:3']
            ]);

            if($validate->fails()){
                return redirect()->back()->withErrors($validate)->withInput();
            }

            Project::create(request(['title', 'description']));

            return redirect('/projects');

        }catch (\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }

    public function show(Project $project)
    {
        try{

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
        $project->update(['title' => $request->title, 'description' => $request->description]);

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
}
