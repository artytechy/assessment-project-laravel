<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CSV\UserListController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\IndexController;
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
Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login/store', [LoginController::class, 'store'])->name('login.store');
Route::delete('logout', [LoginController::class, 'destroy'])->name('logout');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
    Route::resource('dashboard', DashboardController::class)->only(['index']);
    Route::post('file-import', [UserListController::class, 'fileImport'])->name('file-import');
});

Route::get('/', [IndexController::class, 'index']);
