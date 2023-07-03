<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::delete('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/latest-posts', [CategoryController::class, 'latestPosts'])->name('latest-posts');
