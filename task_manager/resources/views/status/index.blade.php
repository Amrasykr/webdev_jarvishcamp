@extends('layout.app')

@section('title', 'Status List')


@section('content')

<div class="container px-4 mt-5 ">
    <h1 class="text-center">
        Statuses List
    </h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('statuses.create') }}" class="btn btn-primary">Create New Status</a>
    </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Status</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($statuses as $status)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $status->name }}</td>
                <td>{{ \Carbon\Carbon::parse($status->created_at)->format('l, F j, Y')}}</td>
                <td>{{ \Carbon\Carbon::parse($status->updated_at)->format('l, F j, Y')}}</td>
                <td class="d-flex gap-2">
                    <a href="{{ url('/statuses/edit/' . $status->id . '') }}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                    <form action="{{ url('/statuses/delete/' . $status->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash" onclick="return confirm('Are you sure you want to delete this status?')"></i></button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection