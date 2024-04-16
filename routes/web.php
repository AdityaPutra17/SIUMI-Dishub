<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LapKerusakanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home/laporankerusakan', [HomeController::class, 'createRusak'])->middleware('auth');
Route::post('/home/laporankerusakan', [HomeController::class, 'storeRusak'])->name('storeUser')->middleware('auth');


Route::resource('/admin/laporankerusakan', LapKerusakanController::class)->middleware('auth');
Route::resource('/admin/datakaryawan', UserController::class)->middleware('auth')->parameters(['datakaryawan' => 'user']);


Route::get('/admin', [HomeController::class, 'homeadmin'])->middleware('auth');

Route::resource('/admin/mamins', MaminController::class);


Route::get('/lihatpresensi', function () {
    return view('admin.lihatpresensi');
});
Route::get('/adminformjadwal', function () {
    return view('admin.jadwal.create');
});
Route::get('/jadwal', function () {
    return view('admin.jadwal.create');
});
Route::get('/idxjadwal', function () {
    return view('admin.jadwal.index');
});
