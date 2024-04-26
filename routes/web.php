<?php

use App\Http\Controllers\GantiShiftController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapKerusakanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaminController;
use App\Http\Controllers\PengajuanIzinController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home/lihatpresensi', [HomeController::class, 'showpresensi'])->name('lihatpresensi')->middleware('auth');

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
Route::get('/home/izin', [PengajuanIzinController::class, 'create'])->middleware('auth');
Route::post('/home/izin', [PengajuanIzinController::class, 'store'])->name('store.izin')->middleware('auth');
Route::resource('/admin/izin', PengajuanIzinController::class)->middleware('auth');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/izin', [PengajuanIzinController::class, 'index'])->name('admin.izin.index');
});

//presensi
Route::get('/home/presensi', [PresensiController::class, 'create'])->middleware('auth')->name('presensi.create');
Route::post('/home/presensi', [PresensiController::class, 'store'])->middleware('auth')->name('presensi.store');
Route::get('/admin/presensi/detail/{id}', [PresensiController::class, 'detail'])->name('admin.presensi.detail');
Route::get('/admin/presensi/show/{id}', [PresensiController::class, 'show'])->name('admin.presensi.show');
Route::resource('/admin/presensi', PresensiController::class)->middleware('auth');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/presensi', [PresensiController::class, 'index'])->name('admin.presensi.index');
});
Route::get('/presensi/export-pdf', [PresensiController::class, 'exportPDF'])->name('presensi.exportPDF');


Route::resource('/admin/datakaryawan', UserController::class)->middleware('auth')->parameters(['datakaryawan' => 'user']);
Route::get('/admin', [HomeController::class, 'homeadmin'])->middleware('auth');
Route::resource('/admin/mamins', MaminController::class)->middleware('auth');
Route::get('/mamin/export-pdf', [MaminController::class, 'exportPDF'])->name('mamin.exportPDF');

Route::resource('/admin/jadwal', JadwalController::class)->middleware('auth');
Route::resource('/admin/jadwal', JadwalController::class)->middleware('auth');




// Testing

Route::get('/presensi', function () {
    return view('users.presensi.create');
});
Route::get('/presensiadmin', function () {
    return view('admin.presensi.index');
});
Route::get('/lp', function () {
    return view('users.lihatpresensi');
});

