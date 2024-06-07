@extends('layout.app')

@section('title', 'Create New Category')

@section('content')
<div class="container px-4 mt-5">
    <h1 class="text-center mb-4">Create New Category</h1>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name">
        </div>
        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>
@endsection
