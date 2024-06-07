@extends('layout.app')

@section('title', 'Projects List')

@section('content')
<div class="container px-4 mt-5 ">
    <h1 class="text-center">
        Projects List
    </h1>

    <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
        @foreach ($projects as $project)
        <div class="card w-25">
            <div class="card-header d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <h6>{{$project->name}}</h6>
                </div>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between ">
                <h6>
                    {{ $project->status->name }}
                </h6>
                <h6>
                    {{ $project->category->name }}
                </h6>
              </div>
              <p class="card-text mt-3">{{$project['description']}}</p>
            
            <p>
                Start Date: {{ \Carbon\Carbon::parse($project->start_date)->format('l, F j, Y') }} <br>
                End Date: {{ \Carbon\Carbon::parse($project->end_date)->format('l, F j, Y') }}
            </p>

            <div class="d-flex gap-2">
                <a href="{{ url('/projects/' . $project->id) }}" class="btn btn-primary">Detail</a>
                <a href="{{ url('/projects/edit/' . $project->id . '') }}" class="btn btn-warning">Edit</a>
                <form action="{{ url('/projects/delete/' . $project->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                </form>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
