<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\LapKerusakan;
use App\Models\Presensi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $userId = Auth::id();

        $jadwals = Jadwal::where('id_user', $userId)->orderBy('tgl_masuk')->get();
        return view('home', compact('jadwals'));
    }
    public function homeadmin(){

        $totalKaryawan = User::count();

        // Hitung karyawan hadir
        $karyawanHadir = Presensi::whereIn('status_hadir', ['hadir', 'terlambat'])
    ->join('jadwals', 'presensis.id_jadwal', '=', 'jadwals.id')
    ->distinct('jadwals.id_user')
    ->count('jadwals.id_user');

        // Hitung karyawan tidak hadir
        $karyawanTidakHadir = Presensi::whereIn('status_hadir', ['alpa', 'izin'])->count();
        return view('admin.homeadmin', compact('totalKaryawan', 'karyawanHadir', 'karyawanTidakHadir'));
    }

    public function createRusak(){
        return view('users.laporankerusakan');
    }

    public function storeRusak(Request $request){
        $request->validate([
            'id_user' => 'required',
            'nama_brg' => 'required',
            'ket' => 'required',
            'gmbr_brg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $gmbr_brg = null;

        if ($request->hasFile('gmbr_brg')) {
            $gmbr_brg = $request->file('gmbr_brg')->store('post-image');
        }

        LapKerusakan::create([
            'id_user' => $request->id_user,
            'nama_brg' => $request->nama_brg,
            'ket' => $request->ket,
            'gmbr_brg' => $gmbr_brg,
        ]);
        return redirect()->route('home')->with('success', 'Laporan berhasil dibuat.');
    }

    public function showpresensi(){
        $userId = Auth::id();
        $presensis = Presensi::whereHas('jadwal', function ($query) use ($userId) {
            $query->where('id_user', $userId);
        })->get();

        $hadir = $presensis->where('status_hadir', 'hadir')->count();
        $alfa = $presensis->where('status_hadir', 'alpa')->count();
        $izin = $presensis->where('status_hadir', 'izin')->count();
        $terlambat = $presensis->where('status_hadir', 'terlambat')->count();

        return view('users.lihatpresensi', compact('presensis', 'hadir', 'alfa', 'izin', 'terlambat'));
    }
}
