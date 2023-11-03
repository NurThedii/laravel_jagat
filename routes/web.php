<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [SessionController::class, 'index'])->name('sesi');
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/dashboard', [BarangController::class, 'index'])->name('dashboard');
Route::get('sesi/register', [SessionController::class, 'register'])->name('register');
Route::post('sesi/create', [SessionController::class, 'create'])->name('create');
Route::delete('/logout', [SessionController::class, 'logout'])->name('logout');
