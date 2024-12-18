<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', [UserController::class, 'create'])->name('user.create');

Route::get('/user/{id}', [UserController::class, 'getUserFromCache'])->name('user.show');

Route::post('/user/store', [UserController::class, 'createUser'])->name('user.store');


