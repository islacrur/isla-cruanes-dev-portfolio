<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        //$projects = Project::all();
        $projects = Project::with('technologies')->get();
        return response()->json($projects, 200);
    }
    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return response()->json($project, 201);
    }
    public function show(Project $project)
    {
        //$project = Project::findOrFail($id);
        $project->load('technologies');
        return response()->json($project);
    }
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return response()->json($project, 200);
    }
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
