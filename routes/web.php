<?php

use App\Http\Controllers\{
    PostController
};
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/create', [postController::class, 'create'])->name('posts.create');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
