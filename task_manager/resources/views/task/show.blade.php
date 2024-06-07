@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4 mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">{{ $task->name }} - {{ $task->category->name }}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $task->description}}</p>
            <p><strong>Due Date:</strong> 
                <span class="badge bg-secondary">{{ \Carbon\Carbon::parse($task->deadline)->diffForHumans() }}</span>
            </p>
            <p><strong>Status: {{$task->status->name}}</span></p>
            <a href="{{ url('/tasks') }}" class="btn btn-primary">Kembali ke Daftar Tugas</a>
        </div>
    </div>
</div>
@endsection
