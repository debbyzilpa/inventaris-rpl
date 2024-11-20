<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::all();
        return view('pengembalian.index', compact('pengembalian'));
    }

    public function create()
    {
        return view('pengembalian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'id_peminjaman' => 'required|exists:users,id',
            'jumlah' => 'required|integer',
            'tgl_kembali' => 'required|date',
            'kondisi_kembali' => 'required|in:Baik,Rusak',
        ]);

        Pengembalian::create($request->all());
        return redirect()->route('pengembalian.index')->with('success', 'Data pengembalian berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('pengembalian.edit', compact('pengembalian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'id_peminjaman' => 'required|exists:users,id',
            'jumlah' => 'required|integer',
            'tgl_kembali' => 'required|date',
            'kondisi_kembali' => 'required|in:Baik,Rusak',
        ]);

        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->update($request->all());
        return redirect()->route('pengembalian.index')->with('success', 'Data pengembalian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Pengembalian::destroy($id);
        return redirect()->route('pengembalian.index')->with('success', 'Data pengembalian berhasil dihapus.');
    }
}
