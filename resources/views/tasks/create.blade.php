@extends('layouts.app')

@section('content')

<h2>Add New Tasks</h2>

<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Task Title">
    </div>




</form>


@endsection