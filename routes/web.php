<?php

use App\Http\Controllers\GantiShiftController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapKerusakanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaminController;
use App\Http\Controllers\PengajuanIzinController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Laporan Kerusakan
Route::get('/home/laporankerusakan', [HomeController::class, 'createRusak'])->middleware('auth');
Route::post('/home/laporankerusakan', [HomeController::class, 'storeRusak'])->name('storeUser')->middleware('auth');
Route::resource('/admin/laporankerusakan', LapKerusakanController::class)->middleware('auth');

//Ganti Shift
Route::get('/home/gantishift', [GantiShiftController::class, 'create'])->middleware('auth')->name('gantishift.create');
Route::post('/home/gantishift', [GantiShiftController::class, 'store'])->middleware('auth')->name('gantishift.store');
Route::resource('/admin/gantishift', GantiShiftController::class);
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/gantishift', [GantiShiftController::class, 'index'])->name('admin.gantishift.index');
});

// Pengajuan izin
Route::get('/home/izin', [PengajuanIzinController::class, 'createIzin'])->middleware('auth');
Route::post('/home/izin', [PengajuanIzinController::class, 'storeIzin'])->name('storeUser')->middleware('auth');
Route::resource('/admin/izin', PengajuanIzinController::class)->middleware('auth');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/izin', [PengajuanIzinController::class, 'index'])->name('admin.izin.index');
});

Route::resource('/admin/datakaryawan', UserController::class)->middleware('auth')->parameters(['datakaryawan' => 'user']);


Route::get('/admin', [HomeController::class, 'homeadmin'])->middleware('auth');

Route::resource('/admin/mamins', MaminController::class)->middleware('auth');

Route::resource('/admin/jadwal', JadwalController::class)->middleware('auth');




// Testing

Route::get('/presensi', function () {
    return view('users.presensi.create');
});
Route::get('/presensiadmin', function () {
    return view('admin.presensi.index');
});
Route::get('/pi', function () {
    return view('users.pengajuanizin');
});
Route::get('/pengajuanizin', function () {
    return view('users.pengajuanizin');
});

Route::get('/showizin', function () {
    return view('admin.izin.show');
});

