<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

$users = [];

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// Route::get('/index', function () {
//     return view('index');
// })->middleware('auth')->name('index');

Route::get('/index', function () {
    return view('index');
});

Route::get('/gallery', function () {
    return view('gallery');
});
