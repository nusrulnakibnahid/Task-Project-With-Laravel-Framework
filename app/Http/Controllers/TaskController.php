<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function index()
    {
        $tasks =  DB::table('tasks')->orderBy('id','desc')->paginate(3);
        // return view('tasks.index', ['tasks' => $tasks]);
        return view('tasks.index', compact('tasks'));
 
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request){

        $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('tasks','public');
            
        }

        DB:: table('tasks')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('tasks.index')->with('success','Task created successfully!');

        }

        public function edit($id){
            $task = DB::table('tasks')->where('id',$id)->first();
            return view('tasks.edit',compact('task'));
        }

        public function update(Request $request, $id){
            $task = DB::table('tasks')->where('id',$id)->first();
            $imagePath = $task->image;

            if($request->hasFile('image')){
                //Delete old image file
                if ($task->image && Storage::disk('public')->exists($task->image)){
                    Storage::disk('public')->delete($task->image);
                }
                //Upload new image file
                $imagePath = $request->file('image')->store('tasks','public');
            }

            DB::table('tasks')->where('id',$id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imagePath,
                'updated_at' => now(),
            ]);

            return redirect()->route('tasks.index')->with('success','Task updated successfully!');
        }











        public function destroy($id){
            $task = DB::table('tasks')->where('id',$id)->first();
    
            //Delete image file if exists
            if ($task->image && Storage::disk('public')->exists($task->image)){
                Storage::disk('public')->delete($task->image);
            }
    
            //Delete Data from database
    
            DB::table('tasks')->where('id',$id)->delete();
            return redirect()->route('tasks.index')->with('success','Task deleted successfully');
        }
}