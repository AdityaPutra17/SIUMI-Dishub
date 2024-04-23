<?php

namespace App\Http\Controllers;

use App\Http\Requests\Updatepengajuan_izinRequest;
use App\Models\PengajuanIzin;
use App\Models\User;
use Illuminate\Http\Request;

class PengajuanIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $izins = PengajuanIzin::all();
        return view('admin.izin.index', compact('izins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::all();
        return view('users.pengajuanizin', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
            'lampiran' => 'required|file|mimes:jpeg,png,pdf|max:2048', // Ubah sesuai dengan jenis file yang diizinkan dan ukuran maksimalnya
            'status' => 'required|in:sakit,izin',
            'keterangan' => 'nullable|string',
        ]);

        $lampiran = null;

        if ($request->hasFile('lampiran')) {
            $lampiran = $request->file('lampiran')->store('post-image/izin');
        }

        PengajuanIzin::create([
            'id_user' => $request->id_user,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'lampiran' => $lampiran,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('home')->with('success', 'Pengajuan izin berhasil diajukan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $izin = PengajuanIzin::findOrFail($id);
        return view('admin.izin.show', compact('izin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengajuanIzin $pengajuanIzin)
    {
        //
        return view('admin.izin.show', compact('pengajuanIzin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengajuanIzin $PengajuanIzin)
    {
        //
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
            'lampiran' => 'required|file|mimes:jpeg,png,pdf|max:2048', // Ubah sesuai dengan jenis file yang diizinkan dan ukuran maksimalnya
            'status' => 'required|in:sakit,izin',
            'keterangan' => 'nullable|string',
        ]);

        $lampiran = null;

        $PengajuanIzin->update([
            'id_user' => $request->id_user,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'lampiran' => $lampiran,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('izin.index')->with('success', 'Pengajuan izin berhasil diajukan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $izin = PengajuanIzin::findOrFail($id);
        $izin -> delete();

        return redirect()->route('')->with('success', 'laporan berhasil dihapus');
    }
}
