@extends('layouts.app')

@section('content')

<h2>Task List</h2>
<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">+Add Tasks</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        
    @endif


<table class="table table-bordered">

    <thead>
        <tr>
            <th>SL No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>


        @foreach ($tasks as $task )

        <tr>
            <td>{{ $loop->iteration + $tasks->firstItem() - 1 }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>
                @if ($task->image)
                    <img src="{{ asset('storage/'.$task->image) }}" width="90">
                @else
                    No Image
                @endif
            </td>

        
            <td>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('tasks.destroy', $task->id ) }}" method="POST" style="display:inline-block;">
                    @csrf

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this task?')">
                        Delete
                    </button>

                </form>
                
            </td>

        </tr>
            
        @endforeach
   
    </tbody>

</table>


{{ $tasks->links() }}




@endsection 