<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Task</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <h1>Edit Task</h1>

    <hr>

    <form action="{{ route('tasks.update', $task) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="title">
                Title:
            </label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ $task->title }}"
                required
            >
        </div>

        <div>
            <label for="description">
                Description:
            </label>

            <textarea
                id="description"
                name="description"
            >{{ $task->description }}</textarea>
        </div>

        <div>
            <label for="due_date">
                Due Date:
            </label>

            <input
                type="date"
                id="due_date"
                name="due_date"
                value="{{ $task->due_date }}"
            >
        </div>

        <div>
            <label for="status">
                Status:
            </label>

            <select id="status" name="status">

                <option
                    value="pending"
                    {{ $task->status === 'pending' ? 'selected' : '' }}
                >
                    Pending
                </option>

                <option
                    value="completed"
                    {{ $task->status === 'completed' ? 'selected' : '' }}
                >
                    Completed
                </option>

            </select>
        </div>

        <button type="submit" class="button">
            Update Task
        </button>

    </form>

    <br>

    <a href="{{ route('tasks.index') }}">
        ← Back to Tasks
    </a>

</div>

</body>
</html>