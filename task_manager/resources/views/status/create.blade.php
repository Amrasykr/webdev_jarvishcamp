@extends('layout.app')

@section('title', 'Create New Status')

@section('content')
<div class="container px-4 mt-5">
    <h1 class="text-center mb-4">Create New Status</h1>
    <form method="POST" action="{{ route('statuses.store') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="status_name" class="form-label">Status Name</label>
            <input type="text" class="form-control" id="status_name" name="status_name">
        </div>
        <button type="submit" class="btn btn-primary">Create Status</button>
    </form>
</div>
@endsection
