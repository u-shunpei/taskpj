<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;

Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/folders/create', [FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('folders/create', [FolderController::class, 'create']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
