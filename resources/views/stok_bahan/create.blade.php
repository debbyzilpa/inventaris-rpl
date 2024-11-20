@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <h1>Tambah Stok Bahan</h1>

        <form action="{{ route('stok_bahan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_bahan">Nama Bahan</label>
                <input type="text" class="form-control" id="nama_bahan" name="nama_bahan" required>
            </div>

            <div class="form-group">
                <label for="stok_awal">Stok Awal</label>
                <input type="number" class="form-control" id="stok_awal" name="stok_awal" required>
            </div>

            <div class="form-group">
                <label for="stok_tambah">Stok Tambah</label>
                <input type="number" class="form-control" id="stok_tambah" name="stok_tambah" required>
            </div>

            <div class="form-group">
                <label for="stok_keluar">Stok Keluar</label>
                <input type="number" class="form-control" id="stok_keluar" name="stok_keluar" required>
            </div>

            <div class="form-group">
                <label for="stok_sisa">Stok Sisa</label>
                <input type="number" class="form-control" id="stok_sisa" name="stok_sisa" required>
            </div>

            <div class="form-group">
                <label for="angka_perolehan">Angka Perolehan</label>
                <input type="number" class="form-control" id="angka_perolehan" name="angka_perolehan" required>
            </div>

            <div class="form-group">
                <label for="angka_penyusutan">Angka Penyusutan</label>
                <input type="number" class="form-control" id="angka_penyusutan" name="angka_penyusutan" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
