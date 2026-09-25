<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View Task</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <h1>View Task</h1>

    <hr>

    <div class="task">

        <h2>{{ $task->title }}</h2>

        <p>
            <strong>Description:</strong>
        </p>

        <p>
            {{ $task->description ?: 'No description' }}
        </p>

        <p>
            <strong>Status:</strong>

            <span class="status status-{{ $task->status }}">
                {{ ucfirst($task->status) }}
            </span>
        </p>

        <p>
            <strong>Due Date:</strong>

            <span class="due-date">
                {{ $task->due_date ?? 'No due date' }}
            </span>
        </p>

    </div>

    <hr>

    <a href="{{ route('tasks.edit', $task) }}" class="button">
        Edit Task
    </a>

    <a href="{{ route('tasks.index') }}">
        Back to Tasks
    </a>

</div>

</body>
</html>