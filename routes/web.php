<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::get('/',[TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');

