@extends('layouts.app')

@section('content')

<h2>Add New Tasks</h2>

<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>




</form>


@endsection