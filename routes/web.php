<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;




Route::get('/', [PostController::class, 'index']);

Route::post('/posts', [PostController::class, 'store']);
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('/posts/{id}/like', [LikeController::class, 'store'])->name('likes.store');

Route::get('/posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
