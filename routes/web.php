<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PostController;

Route::get('/', function (){
    return redirect()->route('posts.index');
});

Route::get('/posts/category/{category}', [PostController::class, 'postsByCategory'])->name('posts.category');


Route::resource('posts', PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
