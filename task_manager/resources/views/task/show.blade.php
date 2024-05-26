@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4 mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">{{ $task['title'] }} - {{ $task['task'] }}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $task['description'] }}</p>
            <p><strong>Due Date:</strong> 
                <span class="badge bg-secondary">{{ \Carbon\Carbon::parse($task['due_date'])->diffForHumans() }}</span>
            </p>
            <p><strong>Status:</strong> <span class="badge bg-{{ $task['status'] == 'Incomplete' ? 'danger' : 'success' }}">{{ $task['status'] }}</span></p>
            <a href="{{ url('/tasks') }}" class="btn btn-primary">Kembali ke Daftar Tugas</a>
        </div>
    </div>
</div>
@endsection
