<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;
use App\Models\Status;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view('task.create', compact('categories', 'statuses'));
    }

    public function store(Request $request)
    {
        // Validate the input fields
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'status_id' => 'required',
            'deadline' => 'required',
        ], [
            'required' => 'The :attribute field cannot be null.',
        ]);

        $task = new Task();

        $task->name = $validatedData['name'];
        $task->description = $validatedData['description'];
        $task->category_id = $validatedData['category_id'];
        $task->status_id = $validatedData['status_id'];
        $task->deadline = $validatedData['deadline'];

        $task->save();

        // Redirect to the task index route with a success message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function show($id)
    {
        $tasks = Task::all();
        $task = collect($tasks)->firstWhere('id', $id);

        if (!$task) {
            abort(404);
        }

        return view('task.show', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        $categories = Category::all();
        $statuses = Status::all();

        return view('task.edit', compact('task', 'categories', 'statuses'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required',
            'description' => 'sometimes|required',
            'category_id' => 'sometimes|required',
            'status_id' => 'sometimes|required',
            'deadline' => 'sometimes|required',
        ], [
            'required' => 'The :attribute field cannot be null.',
        ]);

        $task = Task::find($id);

        if ($request->has('name')) {
            $task->name = $validatedData['name'];
        }
        if ($request->has('description')) {
            $task->description = $validatedData['description'];
        }
        if ($request->has('category_id')) {
            $task->category_id = $validatedData['category_id'];
        }
        if ($request->has('status_id')) {
            $task->status_id = $validatedData['status_id'];
        }
        if ($request->has('deadline')) {
            $task->deadline = $validatedData['deadline'];
        }

        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }


    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
