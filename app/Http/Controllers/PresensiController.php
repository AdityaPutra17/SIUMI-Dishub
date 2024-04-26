<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Jadwal;
use App\Models\presensi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $users = User::all();
        return view('admin.presensi.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $today = Carbon::today();
        $userId = Auth::id();
        $jadwals = Jadwal::whereDate('tgl_masuk', $today)->get();
        foreach ($jadwals as $jadwal) {
            $jadwal->tgl_masuk = Carbon::parse($jadwal->tgl_masuk);
        }
        return view('users.presensi.create', compact('jadwals', 'today'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $userId = Auth::id();
        $userRole = Auth::user()->role;

        if ($userRole === "OfficeBoy"){
            $request->validate([
                'foto_selfie' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'ket' => 'required|in:datang,pulang'
            ]);

            $statusHadir = 'alpa';
            $jammasuk = "08:00";

            $jamSekarang = now()->format('H:i:s');
            if ($request->ket === 'datang' && $jamSekarang > $jammasuk) {
                $statusHadir = 'terlambat';
            } else {
                $statusHadir = 'hadir';
            }

            // Simpan foto selfie ke dalam direktori
            $fotoSelfiePath = $request->foto_selfie->store('foto_selfies');

            Presensi::create([
                'id_jadwal' => $request->id_jadwal,
                'status_hadir' => $statusHadir,
                'ket' => $request->ket,
                'foto_selfie' => $fotoSelfiePath,
            ]);

        }else{
            $request->validate([
                'id_jadwal' => 'required|exists:jadwals,id',
                'foto_selfie' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'ket' => 'required|in:datang,pulang'
            ]);

            // Ambil jadwal berdasarkan id_jadwal yang dipilih
            $jadwal = Jadwal::findOrFail($request->id_jadwal);

            $jadwal->tgl_masuk = Carbon::parse($jadwal->tgl_masuk);

            // Periksa apakah jadwal tersebut sesuai dengan jadwal hari ini
            $today = Carbon::today();
            if ($jadwal->tgl_masuk->format('Y-m-d') != $today->format('Y-m-d')) {
                return redirect()->back()->with('error', 'Anda hanya dapat melakukan presensi sesuai dengan jadwal hari ini');
            }

            $statusHadir = 'alpa';

            // Validasi waktu jika datang atau pulang
            $jamSekarang = now()->format('H:i:s');
            if ($request->ket === 'datang' && $jamSekarang > $jadwal->shift->jam_masuk) {
                $statusHadir = 'terlambat';
            } else {
                $statusHadir = 'hadir';
            }

            // Simpan foto selfie ke dalam direktori
            $fotoSelfiePath = $request->foto_selfie->store('foto_selfies');

            // $existingPresensi = Presensi::where('id_jadwal', $jadwal->id)->exists();

            // // Jika belum ada presensi, tandai sebagai alpa
            // if (!$existingPresensi) {
            //     $statusHadir = 'alpa';
            // }

            Presensi::create([
                'id_jadwal' => $request->id_jadwal,
                'status_hadir' => $statusHadir,
                'ket' => $request->ket,
                'foto_selfie' => $fotoSelfiePath,
            ]);
        }

        // Simpan data presensi ke dalam database

        return redirect()->route('home')->with('success', 'Presensi Berhasil');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $presensi = Presensi::findOrFail($id);
        return view('admin.presensi.show', compact('presensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(presensi $presensi)
    {
        //
        return view('admin.presensi.edit', compact('presensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, presensi $presensi)
    {
        //
        $request->validate([
            'status_hadir' => 'required|in:izin,alpa,hadir,terlambat'
        ]);

        $presensi->update([
            'status_hadir' => $request->status_hadir
        ]);
        return redirect()->route('admin.presensi.index')->with('success', 'Presensi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(presensi $presensi)
    {
        //
        $presensi->delete();
        return redirect()->route('admin.presensi.index')->with('success', 'Presensi berhasil dihapus');
    }

    public function detail($id)
    {
        $presensis = Presensi::whereHas('jadwal', function ($query) use ($id) {
            $query->where('id_user', $id);
        })->get();
        return view('admin.presensi.detail', compact('presensis'));
    }

    public function exportPDF(){
        // Retrieve data from the database
        $presensis = Presensi::join('jadwals', 'presensis.id_jadwal', '=', 'jadwals.id')
        ->join('users', 'jadwals.id_user', '=', 'users.id')
        ->orderBy('users.name')
        ->get(['presensis.*']);

        // Load view file
        $html = view('admin.presensi.pdf', compact('presensis'))->render();

        // Configure Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');

        // Instantiate Dompdf with options
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);

        // Render PDF
        $dompdf->render();

        // Output PDF to browser
        $dompdf->stream('presensi.pdf');
    }
}
