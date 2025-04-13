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
}
