@extends('layout.app')
@section('content') 
<h1 class="mb-4">update Task</h1>
    <form action="{{ route('task.update', $task->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
        @if($task->image)
          <img src="{{ asset('storage/'. $task->image) }}" alt="Task Image" width="70" class="mt-2">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Update Task</button>
    <a href="{{ route('task.index') }}" class="btn btn-secondary">Back</a>
@endsection