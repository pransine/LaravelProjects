<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
{
    return view('tasks.create');
}


public function store(Request $request)
{
    // Check the submitted Task Title
    $validated = $request->validate([
        'title' => ['required', 'string', 'max:100'],
    ]);
    // Insert into the SAME Module 6 tasks table
    Task::create([
        'title' => $validated['title'],
        'status' => 'pending',
    ]);
    // Return to task list with a success message
    return redirect()
        ->route('tasks.index')
        ->with('success', 'Task created successfully!');
    }
}