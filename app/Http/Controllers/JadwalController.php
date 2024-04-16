<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //\
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $shifts = Shift::all();

        return view('admin.jadwal.create', compact('users', 'shifts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'id_shift' => 'required|exists:shifts,id',
            'tgl_masuk' => 'required|date',
        ]);

        Jadwal::create([
            'id_user' => $request->id_user,
            'id_shift' => $request->id_shift,
            'tgl_masuk' => $request->tgl_masuk,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $jadwal = Jadwal::findOrFail($id);
        $users = User::all();
        $shifts = Shift::all();

        return view('admin.jadwal.edit', compact('jadwal', 'users', 'shifts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Jadwal $jadwal)
    {
        //
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'id_shift' => 'required|exists:shifts,id',
            'tgl_masuk' => 'required|date',
        ]);

        $jadwal->update([
            'id_user' => $request->id_user,
            'id_shift' => $request->id_shift,
            'tgl_masuk' => $request->tgl_masuk,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
