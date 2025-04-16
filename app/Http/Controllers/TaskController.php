<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks =  DB::table('tasks')->get();
        // return view('tasks.index', ['tasks' => $tasks]);
        return view('tasks.index', compact('tasks'));
 
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request){

        $imagePPath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('tasks','public');
            
        }

        DB:: table('tasks')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

    
        }

        
}