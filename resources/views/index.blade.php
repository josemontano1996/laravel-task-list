@extends('layouts.app')

@section('title', 'Tasks list')

@section('content')
    <div>
        <a href="{{ route('tasks.create') }}">Add task</a>
    </div>
    @if (count($tasks))
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}
                    </a>
                </li>
            @endforeach
            <nav> {{ $tasks->links() }} </nav>

        </ul>
    @else
        <p>There are no tasks</p>
    @endif

@endsection
