<?php

namespace App\Http\Controllers;

use App\Models\StokBahan;
use Illuminate\Http\Request;

class StokBahanController extends Controller
{

    public function index()
    {

        $stokBahan = StokBahan::all();
        return view('stok_bahan.index', compact('stokBahan'));
    }


    public function create()
    {
        return view('stok_bahan.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'nama_bahan' => 'required|string|max:255',
            'stok_awal' => 'required|integer',
            'stok_tambah' => 'required|integer',
            'stok_keluar' => 'required|integer',
            'stok_sisa' => 'required|integer',
            'angka_perolehan' => 'required|integer',
            'angka_penyusutan' => 'required|integer',
        ]);


        StokBahan::create($request->all());


        return redirect()->route('stok_bahan.index')->with('success', 'Stok Bahan berhasil ditambahkan!');
    }


    public function edit($id)
    {

        $stokBahan = StokBahan::findOrFail($id);
        return view('stok_bahan.edit', compact('stokBahan'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_bahan' => 'required|string|max:255',
            'stok_awal' => 'required|integer',
            'stok_tambah' => 'required|integer',
            'stok_keluar' => 'required|integer',
            'stok_sisa' => 'required|integer',
            'angka_perolehan' => 'required|integer',
            'angka_penyusutan' => 'required|integer',
        ]);


        $stokBahan = StokBahan::findOrFail($id);
        $stokBahan->update($request->all());


        return redirect()->route('stok_bahan.index')->with('success', 'Stok Bahan berhasil diperbarui!');
    }


    public function destroy($id)
    {

        $stokBahan = StokBahan::findOrFail($id);
        $stokBahan->delete();


        return redirect()->route('stok_bahan.index')->with('success', 'Stok Bahan berhasil dihapus!');
    }
}
