<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        
        $tasks = Task::orderBy('completed_at')  // Retrieve all of the task when we visit the homepage
         ->orderBy('id','DESC')
         ->get();  
        return view('tasks.index',[          
            'tasks' => $tasks,                // Display / Render all of the tasks that we have , //  Pass the data to our index view
        ]);
    }
    public function create(){
        return view('tasks.create');
    }
    public function store(){
        request()->validate([
        'description' => 'required|max:255',
        ]);
        $task = Task::create([
            'description' => request('description')
        ]);
        return redirect('/');  // Return to the homepage when a task is created
    }
    public function update($id){
        $task = Task::where('id',$id)->first();
        $task->completed_at = now();
        $task->save();
        return redirect('/');
    }
    public function delete($id){
        $task = Task::where('id',$id)->first();
        $task->delete();
        return redirect('/');
    }

}

// Replace the hompage
// Handle the tasks submission data
// Create a task
// Display a list of tasks
// Mark a task as completed
// Divide the tasks into completed and uncomplete section
// Delete a task permanently.
