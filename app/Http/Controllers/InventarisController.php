<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('inventaris.index', compact('inventaris'));
    }

    public function create()
    {
        return view('inventaris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required|string|max:100',
            'no_inventaris' => 'required|string|max:50|unique:inventaris',
            'spesifikasi' => 'nullable|string',
            'jumlah' => 'required|integer',
            'kondisi' => 'required|in:Baik,Rusak,Butuh perbaikan',
        ]);

        Inventaris::create($request->all());
        return redirect()->route('inventaris.index')->with('success', 'Data inventaris berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $inventaris = Inventaris::findOrFail($id);
        return view('inventaris.edit', compact('inventaris'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alat' => 'required|string|max:100',
            'no_inventaris' => 'required|string|max:50|unique:inventaris,no_inventaris,' . $id,
            'spesifikasi' => 'nullable|string',
            'jumlah' => 'required|integer',
            'kondisi' => 'required|in:Baik,Rusak,Butuh perbaikan',
        ]);

        $inventaris = Inventaris::findOrFail($id);
        $inventaris->update($request->all());
        return redirect()->route('inventaris.index')->with('success', 'Data inventaris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Inventaris::destroy($id);
        return redirect()->route('inventaris.index')->with('success', 'Data inventaris berhasil dihapus.');
    }
}
