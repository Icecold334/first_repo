<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::controller(AuthController::class)->middleware('guest')->name('login')->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'auth');
});
Route::controller(AuthController::class)->middleware('auth')->group(function () {
    Route::controller(AdminHomeController::class)->group(function () {
        Route::any('/', 'index');
    });
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });
    Route::post('/logout', [AuthController::class, 'logout']);
});
