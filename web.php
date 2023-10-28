<?php

use App\Http\Controllers\todoController;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view('home');
})->name('home');

Route::get('/todo-create',function(){
    return view('todo.create');
})->name('todo.create');




Route::post('/store', [todoController::class, 'store'])->name('todo.store');
Route::get('/todos', [todoController::class, 'getAllTodo'])->name('todo.all');
