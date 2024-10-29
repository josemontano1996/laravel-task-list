@extends('layouts.app')

@section('title', 'Update task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 1.2rem;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{ $task->description }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long description</label>
            <textarea name="long_description" id="long_description" rows="5">{{ $task->description }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button>Edit task</button>
    </form>
@endsection
