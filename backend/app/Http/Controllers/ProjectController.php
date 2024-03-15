<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects, 200);
    }
    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return response()->json($project, 201);
    }
   
}
