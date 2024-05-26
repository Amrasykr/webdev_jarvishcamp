@extends('layout.app')

@section('title', 'Tasks List')

@section('content')
<div class="container-fluid px-4 mt-5">
    <h1 class="text-center">
        Tasks List
    </h1>

    <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
        @foreach ($tasks as $task)
        <div class="card w-25">
            <div class="card-header d-flex justify-content-between">
                <div class="d-flex flex-row">
                    <h6>{{$task['title']}}</h6>
                </div>
            </div>

            <div class="card-body">
              <h5 class="card-title">{{$task['task']}}</h5>
              <p class="card-text">{{$task['description']}}</p>
            <p>
                @if ($task['status'] == 'completed')
                <span class="badge rounded-pill bg-success">{{ $task['status'] }}</span>
            @else
                <span class="badge rounded-pill bg-danger">{{ $task['status'] }}</span>
            @endif
            </p>
            <p>
                {{ \Carbon\Carbon::parse($task['due_date'])->diffForHumans() }}

            </p>
            <a href="{{ url('/tasks/' . $task['id']) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
