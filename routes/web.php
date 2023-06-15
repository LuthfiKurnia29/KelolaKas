<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);

// Pemasukan
Route::get('/uang-masuk', [PemasukanController::class, 'index']);
Route::post('/uang-masuk', [PemasukanController::class, 'store']);

// Pengeluaran
Route::get('/uang-keluar', [PengeluaranController::class, 'index']);
Route::post('/uang-keluar', [PengeluaranController::class, 'store']);
