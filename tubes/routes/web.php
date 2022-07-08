<?php

// return view controller
use App\Http\Controllers\HomeController;
// prefix => dashboard
use App\Http\Controllers\DashboardController;

// all resource controller of 7 table | prefix => pemesanan
use App\Http\Controllers\DataPenumpangController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenerbanganController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PerhotelanController;
use App\Http\Controllers\PembayaranController;

use App\Models\User;

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

Route::get('/', function () {
    return view('welcome.index');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('dashboard')->group(function () {
        Route::get('akun', [DashboardController::class, 'akun'])->name('dashboard.akun');
        Route::get('data-penumpang', [DashboardController::class, 'data_penumpang'])->name('dashboard.data-penumpang');
        Route::get('pemesanan', [DashboardController::class, 'pemesanan'])->name('dashboard.pemesanan');
        Route::get('penerbangan', [DashboardController::class, 'penerbangan'])->name('dashboard.penerbangan');
        Route::get('perhotelan', [DashboardController::class, 'perhotelan'])->name('dashboard.perhotelan');
        Route::get('tiket', [DashboardController::class, 'tiket'])->name('dashboard.tiket');
        Route::get('pembayaran', [DashboardController::class, 'pembayaran'])->name('dashboard.pembayaran');
        Route::get('relations', function(){
            $user = User::get();
            return view('auth.dashboard.relations', compact(
                'user'
            ));
        })->name('dashboard.relations');
    });
});

Route::prefix('pemesanan')->group(function () {
    Route::resource('data-penumpang', 'DataPenumpangController');
    Route::resource('pemesanan', 'PemesananController');
    Route::resource('penerbangan', 'PenerbanganController');
    Route::resource('tiket', 'TiketController');
    Route::resource('perhotelan', 'PerhotelanController');
    Route::resource('pembayaran', 'PembayaranController');
});
