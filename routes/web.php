<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use  App\Http\Controllers\AuthController;
use  App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\UserController;



Route::get('/', [BlogController::class, 'index'])->name('posts.home');

Route::get('/posts/{id}', [BlogController::class, 'show'])->name('posts.show');

Route::get('/search', [BlogController::class, 'searchPost'])->name('posts.search');
