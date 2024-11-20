<?php

namespace App\Http\Controllers;

use App\Models\Perbaikan;
use Illuminate\Http\Request;

class PerbaikanController extends Controller
{
    public function index()
    {
        $perbaikan = Perbaikan::all();
        return view('perbaikan.index', compact('perbaikan'));
    }

    public function create()
    {
        return view('perbaikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'tgl_perbaikan' => 'required|date',
            'keterangan' => 'nullable|string',
            'paraf_teknisi' => 'nullable|string|max:100',
        ]);

        Perbaikan::create($request->all());
        return redirect()->route('perbaikan.index')->with('success', 'Perbaikan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $perbaikan = Perbaikan::findOrFail($id);
        return view('perbaikan.edit', compact('perbaikan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'tgl_perbaikan' => 'required|date',
            'keterangan' => 'nullable|string',
            'paraf_teknisi' => 'nullable|string|max:100',
        ]);

        $perbaikan = Perbaikan::findOrFail($id);
        $perbaikan->update($request->all());
        return redirect()->route('perbaikan.index')->with('success', 'Perbaikan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $perbaikan = Perbaikan::findOrFail($id);
        $perbaikan->delete();
        return redirect()->route('perbaikan.index')->with('success', 'Perbaikan berhasil dihapus.');
    }
}
