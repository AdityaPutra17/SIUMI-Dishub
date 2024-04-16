<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $role = $request->role;

        // Jika parameter role tidak diberikan atau tidak valid, ambil semua data
        if (!$role || !in_array($role, ['Security', 'OfficeBoy'])) {
            $users = User::orderBy('name')->get();
        } else {
            $users = User::where('role', $role)->get();
        }

        return view('admin.datakaryawan.index', compact('users'));
        // $users = User::orderBy('name')->get();
        // return view('admin.datakaryawan.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.datakaryawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string',
            'tgl_lahir' => 'nullable|date',
            'foto' => 'nullable|image|max:2048',
            'role' => 'required|in:OfficeBoy,Security,admin'
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('post-image/foto');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tgl_lahir = $request->tgl_lahir;
        $user->role = $request->role;
        $user->foto = $foto;
        $user->save();

        return redirect()->route('datakaryawan.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.datakaryawan.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.datakaryawan.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'tgl_lahir' => 'nullable|date',
            'foto' => 'nullable|image|max:2048',
            'role' => 'required|in:OfficeBoy,Security,admin',
        ]);
        //update data user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->role = $request->role;

        //update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        //update foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('post-image/foto');
            $user->foto = $foto;
        }

        $user->save();

        return redirect()->route('datakaryawan.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('datakaryawan.index')->with('success', 'Laporan Berhasil Dihapus');
    }
}
