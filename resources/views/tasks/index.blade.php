<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Task Manager</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <h1>Task Manager</h1>

    <a href="{{ route('tasks.create') }}" class="button">
        + Create New Task
    </a>

    <hr>

    @if ($tasks->count())

        @foreach ($tasks as $task)

            <div class="task">

                <h2>{{ $task->title }}</h2>

                <p>
                    <strong>Description:</strong>
                    {{ $task->description }}
                </p>

                <p>
                    <strong>Status:</strong>

                    <span class="status">
                        {{ ucfirst($task->status) }}
                    </span>
                </p>

                <p>
                    <strong>Due Date:</strong>
                    {{ $task->due_date ?? 'No due date' }}
                </p>

                <br>

                <a href="{{ route('tasks.show', $task) }}">
                    View
                </a>

                |

                <a href="{{ route('tasks.edit', $task) }}">
                    Edit
                </a>

                |

                <form
                    action="{{ route('tasks.destroy', $task) }}"
                    method="POST"
                    style="display:inline;"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="button button-danger">
                        Delete
                    </button>
                </form>

            </div>

        @endforeach

    @else

        <p>No tasks yet.</p>

    @endif

</div>

</body>
</html>