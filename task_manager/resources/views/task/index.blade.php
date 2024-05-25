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
        <h1 class="text-center">
            Tasks List
        </h1>

        <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
            @foreach ($tasks as $task)
            <div class="card w-25">
                <div class="card-header d-flex justify-content-between">
                    <div class="d-flex flex-row">
                        <h6>{{$task['title']}}</h6>
                    </div>
                </div>

                <div class="card-body">
                  <h5 class="card-title">{{$task['task']}}</h5>
                  <p class="card-text">{{$task['description']}}</p>
                <p>
                    @if ($task['status'] == 'completed')
                    <span class="badge rounded-pill bg-success">{{ $task['status'] }}</span>
                @else
                    <span class="badge rounded-pill bg-danger">{{ $task['status'] }}</span>
                @endif
                </p>
                <p>
                    {{ \Carbon\Carbon::parse($task['due_date'])->diffForHumans() }}

                </p>
                <a href="{{ url('/tasks/' . $task['id']) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>