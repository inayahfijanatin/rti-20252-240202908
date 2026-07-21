<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Menampilkan daftar guru
     */
    public function index()
    {
        $guru = Guru::latest()->paginate(10);

        return view('guru.index', compact('guru'));
    }

    /**
     * Menampilkan form tambah guru
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Menyimpan data guru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:guru,nip',
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'nullable',
            'email' => 'nullable|email',
            'alamat' => 'nullable',
        ]);

        Guru::create($request->all());

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit
     */
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update data guru
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nip' => 'required|unique:guru,nip,' . $guru->id,
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'nullable',
            'email' => 'nullable|email',
            'alamat' => 'nullable',
        ]);

        $guru->update($request->all());

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Hapus data guru
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}