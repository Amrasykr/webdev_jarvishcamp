@extends('layout.app')

@section('title', 'Edit Category')

@section('content')
<div class="container px-4 mt-5">
    <h1 class="text-center mb-4">Edit Category</h1>
    <form method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="category_name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $category->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>
@endsection
