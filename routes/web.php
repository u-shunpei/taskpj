<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\HomeController;

//一覧画面
Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');

//フォルダ追加機能、表示画面
Route::get('/folders/create', [FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('folders/create', [FolderController::class, 'create']);

//タスク作成ページ表示、タスク作成処理実行
Route::get('/folders/{id}/tasks/create', [TaskController::class, 'showCreateForm'])->name('tasks.create');
Route::post('/folders/{id}/tasks/create', [TaskController::class, 'create']);

//タスク編集ページ表示、タスク編集処理を実行
Route::get('/folders/{id}/tasks/{task_id}/edit', [TaskController::class, 'showEditForm'])->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', [TaskController::class, 'edit']);

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
