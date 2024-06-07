<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Status;
use Illuminate\Http\Request;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view('project.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input fields
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'status_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ], [
            'required' => 'The :attribute field cannot be null.',
        ]);

        $project = new Project();

        $project->name = $validatedData['name'];
        $project->description = $validatedData['description'];
        $project->category_id = $validatedData['category_id'];
        $project->status_id = $validatedData['status_id'];
        $project->start_date = $validatedData['start_date'];
        $project->end_date = $validatedData['end_date'];

        $project->save();

        // Redirect to the project index route with a success message
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projects = Project::all();
        $project = collect($projects)->firstWhere('id', $id);

        if (!$project) {
            abort(404);
        }

        return view('project.show', compact('project'));
    }

    public function edit(string $id)
    {
        $project = Project::find($id);
        $categories = Category::all();
        $statuses = Status::all();
        return view('project.edit', compact('project', 'categories', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required',
            'description' => 'sometimes|required',
            'category_id' => 'sometimes|required',
            'status_id' => 'sometimes|required',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|required|date',
        ], [
            'required' => 'The :attribute field cannot be null.',
        ]);

        $project = Project::find($id);

        if ($request->has('name')) {
            $project->name = $validatedData['name'];
        }
        if ($request->has('description')) {
            $project->description = $validatedData['description'];
        }
        if ($request->has('category_id')) {
            $project->category_id = $validatedData['category_id'];
        }
        if ($request->has('status_id')) {
            $project->status_id = $validatedData['status_id'];
        }
        if ($request->has('start_date')) {
            $project->start_date = $validatedData['start_date'];
        }
        if ($request->has('end_date')) {
            $project->end_date = $validatedData['end_date'];
        }

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
