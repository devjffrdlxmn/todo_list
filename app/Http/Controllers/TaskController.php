<?php

namespace App\Http\Controllers;

use App\Models\Task;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->paginate(5);
        return view('tasks.index',['tasks' =>$tasks ]);
    }

    public function show(Task $task)
    {
        return view('tasks.show',['task' =>$task ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
     
        request()->validate([
            'title'=> ['required'],
            'description' => ['required']
        ]);
        Task::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
   
        return redirect('/tasks');
    }

    public function edit(Task $task)   
    {
        return view('tasks.edit',['task'=>$task ]);
    }
    public function update(Task $task)   
    {
        request()->validate([
            'title'=> ['required'],
            'description' => ['required']
        ]);
        $task->update([
            'title' => request('title'),
            'description' => request('description')
        ]);
        return redirect('tasks/'. $task->id);
    }


   public function destroy(Task $task)   
    {
        $task->delete();
        return redirect('tasks/');
    }


    
}
