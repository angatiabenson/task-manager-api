<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = QueryBuilder::for(Project::class)->allowedIncludes('tasks')->paginate();
        return new ProjectCollection($projects);
    }
    //
    public function store(StoreProjectRequest $request)
    {
        $validated = $request->validated();
        $task = Auth::user()->projects()->create($validated);
        return new ProjectResource($task);
    }

    public function show(Request $request, Project $project)
    {
        return (new ProjectResource($project))
            ->load('tasks')
            ->load('members');
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $validate = $request->validated();
        $project->update($validate);
        return new ProjectResource($project);
    }

    public function destroy(Request $request, Project $project)
    {
        $project->delete();
        return response()->noContent();
    }
}