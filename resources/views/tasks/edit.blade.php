@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Task</h2>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
</div>
@endsection
