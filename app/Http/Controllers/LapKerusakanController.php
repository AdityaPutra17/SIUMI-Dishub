<?php

namespace App\Http\Controllers;

use App\Models\LapKerusakan;
use Illuminate\Http\Request;

class LapKerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kerusakans = LapKerusakan::all();
        return view('admin.laporankerusakan.index', compact('kerusakans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.laporankerusakan.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        return redirect()->route('laporankerusakan.index')->with('success', 'Laporan berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kerusakan = LapKerusakan::findOrFail($id);
        return view('admin.laporankerusakan.show', compact('kerusakan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lapKerusakan $lapKerusakan)
    {
        return view('admin.laporankerusakan.edit', compact('lapKerusakan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lapKerusakan $lapKerusakan)
    {
        $request->validate([
            'id_user' => 'required',
            'nama_brg' => 'required',
            'ket' => 'required',
            'gmbr_brg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $gmbr_brg = null;

        if ($request->hasFile('gmbr_brg')) {
            $gmbr_brg = $request->file('gmbr_brg')->store('public/post-image');
            $lapKerusakan->gmbr_brg = $gmbr_brg;
        }

        $lapKerusakan->nama_brg = $request->nama_brg;
        $lapKerusakan->ket = $request->ket;
        $lapKerusakan->save();
        return redirect()->route('laporankerusakan.index')->with('success', 'Laporan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lapKerusakan = LapKerusakan::findOrFail($id);
        $lapKerusakan->delete();

        return redirect()->route('laporankerusakan.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
