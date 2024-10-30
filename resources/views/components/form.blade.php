@extends('layouts.app')


@section('title', isset($task) ? 'Edit task' : 'Create a new task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 1.2rem;
        }
    </style>
@endsection

@section('content')
<form action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" method="POST" class="space-y-4">
    @csrf
    @isset($task)
        @method('PUT')
    @endisset
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}">
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="long_description">Long description</label>
        <textarea name="long_description" id="long_description" rows="5">{{ $task->long_description ?? old('long_description') }}</textarea>
        @error('long_description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <button class="btn">
        @isset($task)
            Update task
        @else
            Create
        @endisset
    </button>
</form>
@endsection
