@extends('layouts.app')

@section('content')

<h2>Edit Tasks</h2>

<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $tasks->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="description">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="description">Title</label>
        <input type="file" name="image" class="form-control" ></input>
    </div>

    <button type="submit" class="btn btn-success">Create</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>


</form>


@endsection