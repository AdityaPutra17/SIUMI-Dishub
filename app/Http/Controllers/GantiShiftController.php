<?php

namespace App\Http\Controllers;

use App\Models\GantiShift;
use App\Models\Jadwal;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;

class GantiShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $gantiShifts = GantiShift::all();
        return view('admin.gantishift.index', compact('gantiShifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::all();
        $shifts = Shift::all();
        $jadwals = Jadwal::all();
        return view('users.pergantianshift', compact('users', 'shifts', 'jadwals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'id_user_uploader'=>'required|',
            'id_shift' => 'required|exists:shifts,id',
            'id_jadwal' => 'required|exists:jadwals,id',
            'ket' => 'required'
        ]);

        // Simpan data ke dalam database
        GantiShift::create([
            'id_user' => $request->id_user,
            'id_user_uploader' => $request->id_user_uploader,
            'id_shift' => $request->id_shift,
            'id_jadwal' => $request->id_jadwal,
            'ket' => $request->ket,
        ]);

        // Redirect ke halaman home dengan pesan sukses
        return redirect()->route('home')->with('success', 'Ganti Shift telah diajukan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $gantiShift = GantiShift::findOrFail($id);
        return view('admin.gantishift.show', compact('gantiShift'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GantiShift $gantiShift)
    {
        //
        return view('admin.gantishift.edit', compact('gantiShift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GantiShift $gantiShift)
    {
        //
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'id_user_uploader'=>'required|',
            'id_shift' => 'required|exists:shifts,id',
            'id_jadwal' => 'required|exists:jadwals,id',
            'ket' => 'required'
        ]);

        $gantiShift->update([
            'id_user' => $request->id_user,
            'id_user_uploader' => $request->id_user_uploader,
            'id_shift' => $request->id_shift,
            'id_jadwal' => $request->id_jadwal,
            'ket' => $request->ket,
        ]);

        // Redirect ke halaman home dengan pesan sukses
        return redirect()->route('gantishift.index')->with('success', 'Ganti Shift telah diajukan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $gantiShift = GantiShift::findOrFail($id);
        $gantiShift->delete();

        return redirect()->route('gantishift.index')->with('success', 'laporan berhasil dihapus');
    }
}
