<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }
}
