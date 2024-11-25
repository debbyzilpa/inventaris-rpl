<?php

namespace App\Http\Controllers;

use App\Models\KerusakanAlat;
use Illuminate\Http\Request;

class KerusakanAlatController extends Controller
{
    public function index()
    {
        $kerusakanAlat = KerusakanAlat::all();
        return view('kerusakan_alat.index', compact('kerusakanAlat'));
    }

    public function create()
    {
        return view('kerusakan_alat.create');
    }

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

    public function show($id)
    {
        $kerusakanAlat = KerusakanAlat::find($id);
        return view('kerusakan_alat.show', compact('kerusakanAlat'));
    }

    public function edit($id)
    {
        $kerusakanAlat = KerusakanAlat::find($id);
        return view('kerusakan_alat.edit', compact('kerusakanAlat'));
    }

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

    public function destroy($id)
    {
        $kerusakanAlat = KerusakanAlat::find($id);
        $kerusakanAlat->delete();
        return redirect()->route('kerusakan_alat.index')->with('success', 'Data kerusakan alat berhasil dihapus.');
    }
}
