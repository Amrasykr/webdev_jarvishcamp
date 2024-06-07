<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('dashboard');
});

// Task
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/update/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/delete/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');


// Project
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/projects/delete/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');


// Status
Route::get('/statuses', [StatusController::class, 'index'])->name('statuses.index');
Route::get('/statuses/create', [StatusController::class, 'create'])->name('statuses.create');
Route::post('/statuses/store', [StatusController::class, 'store'])->name('statuses.store');
Route::get('/statuses/edit/{id}', [StatusController::class, 'edit'])->name('statuses.edit');
Route::put('/statuses/update/{id}', [StatusController::class, 'update'])->name('statuses.update');
Route::delete('/statuses/delete/{id}', [StatusController::class, 'destroy'])->name('statuses.destroy');


// Category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');