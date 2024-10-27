@extends('layouts.app')

@section('title', 'Tasks list')

@section('content')
    @if (count($tasks))
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>There are no tasks</p>
    @endif
@endsection
