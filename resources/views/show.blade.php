@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="mb-4">
        <a href="{{ route('tasks.index') }}" class="link">Back to task
            list</a>
    </div>

    <p class="mb-4 text-slate-700">{{ $task->description }}</p>

    @if ($task->long_description)
        <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
    @endif

    <p class="mb-4 text-sm text-slate-500"> Created {{ $task->created_at->diffForHumans() }} , updated
        {{ $task->updated_at->diffForHumans() }}</p>
    <p class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-500">Completed</span>
        @else
            <span class="font-medium text-red-500">Not completed</span>
        @endif
    </p>

    <div class="flex justify-evenly items-center">
        <div>
            <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn">Edit</a>
        </div>
        <div>
            <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn">
                    Mark as {{ $task->completed ? 'not completed' : 'completed' }}</button>
            </form>
        </div>
        <div>
            <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn">Delete</button>
            </form>
        </div>
    </div>
@endsection
