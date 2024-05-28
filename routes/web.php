<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengunjungController;

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

Route::get('/',function() {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'login'])->middleware('guest:web')->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::middleware('auth')->group(function () {
    //Role Admin
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('users', UserController::class);
    });
    
    //Role Pengunjung
    Route::middleware('pengunjung')->group(function () {
        Route::get('/pengunjung', [PengunjungController::class, 'pengunjung'])->name('pengunjung');

    });

    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
    Route::delete('/hapus-customer/{id}', [AdminController::class, 'hapusCustomer'])->name('hapus-customer');
});

