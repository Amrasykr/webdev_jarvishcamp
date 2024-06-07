@extends('layout.app')

@section('title', 'Project Details')

@section('content')
<div class="container-fluid px-4 mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">{{ $project->name }} - {{ $project->category->name }}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $project->description }}</p>
            <p><strong>Start Date:</strong> 
                <span class="badge bg-secondary">{{ \Carbon\Carbon::parse($project->start_date)->format('l, F j, Y') }}</span>
            </p>
            <p><strong>End Date:</strong> 
                <span class="badge bg-secondary">{{ \Carbon\Carbon::parse($project->end_date)->format('l, F j, Y') }}</span>
            </p>
            <p><strong>Status:</strong> {{ $project->status->name }}</p>
            <a href="{{ url('/projects') }}" class="btn btn-primary">Back to Project List</a>
        </div>
    </div>
</div>
@endsection
