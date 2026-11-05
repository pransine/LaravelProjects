<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// Module 6: existing task list (add its route name if missing)
Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks.index');
// Module 7: open the form
Route::get('/tasks/create', [TaskController::class, 'create'])
    ->name('tasks.create');
// Module 7: receive the form submission
Route::post('/tasks', [TaskController::class, 'store'])
    ->name('tasks.store');