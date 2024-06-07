@extends('layout.app')

@section('title', 'Tasks List')

@section('content')
<div class="container-fluid px-4 mt-5 ">
    <h1 class="text-center">
        Tasks List
    </h1>

    <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
        @foreach ($tasks as $task)
        <div class="card w-25">
            <div class="card-header d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <h6>{{$task->name}}</h6>
                </div>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between ">
                <h6>
                    {{ $task->status->name }}
                </h6>
                <h6>
                    {{ $task->category->name }}
                </h6>
              </div>
              <p class="card-text mt-3">{{$task['description']}}</p>
            
            <p>
                {{ \Carbon\Carbon::parse($task->deadline)->diffForHumans() }}

            </p>

            <div class="d-flex gap-2">
                <a href="{{ url('/tasks/' . $task->id) }}" class="btn btn-primary">Detail</a>
                <a href="{{ url('/tasks/edit/' . $task->id . '') }}" class="btn btn-warning">Edit</a>
                <form action="{{ url('/tasks/delete/' . $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                </form>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
