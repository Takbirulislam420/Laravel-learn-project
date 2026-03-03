@extends('layout.app');
@section('content')
<h1 class="mb-4">Task List</h1>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('task.create') }}" class="btn btn-primary">Add New Task</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tasks as $task)
      <tr>
        <th scope="row">{{ $loop->iteration + $tasks->firstItem() - 1 }}</th>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>
            @if($task->image)
          <img src="{{ asset('storage/'. $task->image) }}" alt="Task Image" width="70">
            @else
            No Image
            @endif
        </td>  
        <td>
              <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('task.destroy', $task->id) }}" method="GET" style="display:inline;">
                  @csrf
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
              </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{{ $tasks->links('pagination::bootstrap-5') }}
    
@endsection