@extends('layouts.app')

@section('content')

<h2>Task List</h2>
<a href="" class="btn btn-primary mb-3">+Add Tasks</a>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>


        @foreach ($tasks as $task )

        <tr>
            <td>{{ $task->id }}</td>
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
                <a href="" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm ">Delete</button>
            </td>

        </tr>
            
        @endforeach
        
       
    </tbody>

   
            




</table>

@endsection 