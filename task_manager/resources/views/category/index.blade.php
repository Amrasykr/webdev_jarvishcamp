@extends('layout.app')

@section('title', 'Categories List')

@section('content')
<div class="container px-4 mt-5">
    <h1 class="text-center mb-4">Categories List</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New Category</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at->format('l, F j, Y') }}</td>
                <td>{{ $category->updated_at->format('l, F j, Y') }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
