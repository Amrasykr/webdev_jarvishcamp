<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;


class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::all();
        return view('status.index', compact('statuses'));
    }

    public function create()
    {
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status_name' => 'required|unique:statuses,name',
        ]);

        Status::create([
            'name' => $request->status_name,
        ]);

        return redirect()->route('statuses.index')->with('success', 'Status created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $status = Status::find($id);
        return view('status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status_name' => 'required|unique:statuses,name,' . $id,
        ]);

        $status = Status::findOrFail($id);
        $status->name = $request->status_name;
        $status->save();

        return redirect()->route('statuses.index')->with('success', 'Status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $status = Status::findOrFail($id);
        $status->delete();

        return redirect()->route('statuses.index')->with('success', 'Status deleted successfully.');
    }
}
