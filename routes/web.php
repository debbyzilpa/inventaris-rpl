<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerbaikanController;
use App\Http\Controllers\StokBahanController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\KerusakanAlatController;
use App\Http\Controllers\JurnalLaboratoriumController;

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
    return view('admin.index');
});

Route::resource('inventaris', InventarisController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('perbaikan', PerbaikanController::class);
Route::resource('kerusakan_alat', KerusakanAlatController::class);
Route::resource('pengembalian', PengembalianController::class);
Route::resource('stok_bahan', StokBahanController::class);
Route::resource('jurnal_laboratorium', JurnalLaboratoriumController::class);

//login register
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin-dashboard', function () {
            return view('admin.dashboard');
        });
    });
    Route::middleware('role:operator')->group(function () {
        Route::get('/operator-dashboard', function () {
            return view('operator.dashboard');
        });
    });
});

