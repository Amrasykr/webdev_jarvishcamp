<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>