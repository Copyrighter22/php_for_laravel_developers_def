<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks',[
        'tasks' => Task::all()
        ]);
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks' => Task::all()
    ]);
});

Route::get('/users', function () {
    return view('users',[
        'users' => User::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

