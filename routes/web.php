<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::view('/', 'layouts.app');

Route::view('/one', 'child-1');
Route::view('/two', 'child-2');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);
Route::get('/user/{id}', [UserController::class, 'details']);
Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{user}', [UserController::class, 'delete']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
