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
        
        <tr>
            <td>01</td>
            <td>Test Task </td>
            <td>Test Description</td>
            <td><img src="https://assets.manutd.com/AssetPicker/images/0/0/10/126/687707/Legends-Profile_Cristiano-Ronaldo1523460877263.jpg" width="90"></td>
            <td>
                <a href="" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm ">Delete</button>
            </td>


            
        </tr>
    </tbody>

   
            




</table>

@endsection 