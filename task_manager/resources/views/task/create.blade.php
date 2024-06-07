@extends('layout.app')

@section('title', 'Create Task')

@section('content')
<div class="container px-4 mt-5 ">
    <h1 class="text-center mb-4">
        Create Task
    </h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="form-group row">
          <label for="name" class="col-4 col-form-label">Task Name</label> 
          <div class="col-8">
            <input id="name" name="name" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="deadline" class="col-4 col-form-label">Deadline</label> 
          <div class="col-8">
            <input id="deadline" name="deadline" type="date" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="category_id" class="col-4 col-form-label">Category</label> 
          <div class="col-8">
            <select id="category_id" name="category_id" class="custom-select">
              @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="status_id" class="col-4 col-form-label">Status</label> 
          <div class="col-8">
            <select id="status_id" name="status_id" class="custom-select">
              @foreach($statuses as $status)
                <option value="{{ $status->id }}">{{ $status->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="description" class="col-4 col-form-label">Description</label> 
          <div class="col-8">
            <textarea id="description" name="description" cols="40" rows="5" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
    </form>
</div>
@endsection
