<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Obtener todos los proyectos
        $projects = Project::all();

        // Iterar sobre cada proyecto para filtrar las tecnologías asociadas
        $projects->each(function ($project) {
            // Obtener las tecnologías asociadas excluyendo la información de pivot
            $technologies = $project->technologies->map(function ($technology) {
                return [
                    'id' => $technology->id,
                    'name' => $technology->name
                ];
            });

            // Reemplazar las tecnologías asociadas con las filtradas
            $project->setRelation('technologies', $technologies);
        });

        // Devolver la respuesta JSON con los proyectos y las tecnologías filtradas
        return response()->json($projects);
    }
    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return response()->json($project, 201);
    }
    public function show($id)
    {
        // Buscar el proyecto por su ID
        $project = Project::findOrFail($id);

        // Obtener las tecnologías asociadas excluyendo la información de pivot
        $technologies = $project->technologies->map(function ($technology) {
            return [
                'id' => $technology->id,
                'name' => $technology->name
            ];
        });

        // Reemplazar las tecnologías asociadas con las filtradas
        $project->setRelation('technologies', $technologies);

        // Devolver la respuesta JSON con el proyecto y las tecnologías filtradas
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
