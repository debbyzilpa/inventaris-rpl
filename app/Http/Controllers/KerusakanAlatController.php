<?php

namespace App\Http\Controllers;

use App\Models\KerusakanAlat;
use Illuminate\Http\Request;

class KerusakanAlatController extends Controller
{
    // Menampilkan daftar kerusakan alat
    public function index()
    {
        $kerusakanAlat = KerusakanAlat::all();
        return view('kerusakan_alat.index', compact('kerusakanAlat'));
    }

    // Form untuk menambah kerusakan alat
    public function create()
    {
        return view('kerusakan_alat.create');
    }

    // Menyimpan data kerusakan alat ke database
    public function store(Request $request)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'kerusakan' => 'required',
            'tgl_kerusakan' => 'required|date',
        ]);

        KerusakanAlat::create($request->all());
        return redirect()->route('kerusakan_alat.index')->with('success', 'Data kerusakan alat berhasil ditambahkan.');
    }

    // Menampilkan detail kerusakan alat
    public function show($id)
    {
        $kerusakanAlat = KerusakanAlat::find($id);
        return view('kerusakan_alat.show', compact('kerusakanAlat'));
    }

    // Form untuk edit data kerusakan alat
    public function edit($id)
    {
        $kerusakanAlat = KerusakanAlat::find($id);
        return view('kerusakan_alat.edit', compact('kerusakanAlat'));
    }

    // Update data kerusakan alat
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'kerusakan' => 'required',
            'tgl_kerusakan' => 'required|date',
        ]);

        $kerusakanAlat = KerusakanAlat::find($id);
        $kerusakanAlat->update($request->all());
        return redirect()->route('kerusakan_alat.index')->with('success', 'Data kerusakan alat berhasil diperbarui.');
    }

    // Menghapus data kerusakan alat
    public function destroy($id)
    {
        $kerusakanAlat = KerusakanAlat::find($id);
        $kerusakanAlat->delete();
        return redirect()->route('kerusakan_alat.index')->with('success', 'Data kerusakan alat berhasil dihapus.');
    }
}
