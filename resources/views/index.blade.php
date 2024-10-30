@extends('layouts.app')

@section('title', 'Tasks list')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}" class="link">Add task</a>
        </div>
        @if (count($tasks))
            <ul>
                @foreach ($tasks as $task)
                    <li>
                        <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                            @class(['line-through' => $task->completed])>{{ $task->title }}
                        </a>
                    </li>
                @endforeach
                <nav> {{ $tasks->links() }} </nav>

            </ul>
        @else
            <p>There are no tasks</p>
        @endif

    @endsection
