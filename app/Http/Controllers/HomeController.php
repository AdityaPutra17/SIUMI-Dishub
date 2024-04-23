<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\LapKerusakan;
use App\Models\PengajuanIzin;
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
        return view('admin.homeadmin');
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
}
