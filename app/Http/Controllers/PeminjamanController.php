<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Inventaris;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Tampilkan daftar peminjaman.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mendapatkan semua data peminjaman
        $peminjaman = Peminjaman::with(['inventaris', 'user'])->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Tampilkan form untuk menambah peminjaman baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventaris = Inventaris::all(); // Menampilkan semua inventaris
        $users = User::all(); // Menampilkan semua pengguna
        return view('peminjaman.create', compact('inventaris', 'users'));
    }

    /**
     * Simpan data peminjaman baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'id_peminjaman' => 'required|exists:users,id',
            'jumlah' => 'required|integer|min:1',
            'tgl_peminjaman' => 'required|date',
            'kondisi_pinjam' => 'required|in:Baik,Rusak',
        ]);

        // Menyimpan data
        Peminjaman::create($request->all());

        return redirect()->route('peminjaman.index')
                         ->with('success', 'Peminjaman alat berhasil ditambahkan.');
    }

    /**
     * Tampilkan form untuk mengedit peminjaman.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        $inventaris = Inventaris::all();
        $users = User::all();
        return view('peminjaman.edit', compact('peminjaman', 'inventaris', 'users'));
    }

    /**
     * Update data peminjaman.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        // Validasi data
        $request->validate([
            'id_alat' => 'required|exists:inventaris,id',
            'id_peminjaman' => 'required|exists:users,id',
            'jumlah' => 'required|integer|min:1',
            'tgl_peminjaman' => 'required|date',
            'kondisi_pinjam' => 'required|in:Baik,Rusak',
        ]);

        // Mengupdate data
        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.index')
                         ->with('success', 'Peminjaman alat berhasil diperbarui.');
    }

    /**
     * Hapus data peminjaman.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        // Menghapus data
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')
                         ->with('success', 'Peminjaman alat berhasil dihapus.');
    }
}
