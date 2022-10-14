<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;

//一覧画面
Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');

//フォルダ追加機能、表示画面
Route::get('/folders/create', [FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('folders/create', [FolderController::class, 'create']);

//タスク作成ページ表示、タスク作成処理実行
Route::get('/folders/{id}/tasks/create', [TaskController::class, 'showCreateForm'])->name('tasks.create');
Route::post('/folders/{id}/tasks/create', [TaskController::class, 'create']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
