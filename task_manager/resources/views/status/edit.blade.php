@extends('layout.app')

@section('title', 'Edit Status')

@section('content')
<div class="container px-4 mt-5">
    <h1 class="text-center mb-4">Edit Status</h1>
    <form method="POST" action="{{ route('statuses.update', $status->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="status_name" class="form-label">Status Name</label>
            <input type="text" class="form-control" id="status_name" name="status_name" value="{{ $status->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Status</button>
    </form>
</div>
@endsection
