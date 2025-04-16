@extends('layouts.app')

@section('content')

<h2>Edit Tasks</h2>

<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="description">Description</label>
        <textarea name="description" class="form-control"> {{ $task->description }} </textarea>
    </div>

    <div class="mb-3">
        <label for="description">Title</label>
        <input type="file" name="image" class="form-control" ></input>

        @if ($task->image)
        <div>

            <img src="{{ asset('storage/'.$task->image) }}" width="90">

        </div>
                 
        @endif
    </div>

    <button type="submit" class="btn btn-success">Create</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>


</form>


@endsection