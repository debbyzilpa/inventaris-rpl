@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <h1>Edit Stok Bahan</h1>

        <form action="{{ route('stok_bahan.update', $stokBahan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_bahan">Nama Bahan</label>
                <input type="text" class="form-control" id="nama_bahan" name="nama_bahan" value="{{ $stokBahan->nama_bahan }}" required>
            </div>

            <div class="form-group">
                <label for="stok_awal">Stok Awal</label>
                <input type="number" class="form-control" id="stok_awal" name="stok_awal" value="{{ $stokBahan->stok_awal }}" required>
            </div>

            <div class="form-group">
                <label for="stok_tambah">Stok Tambah</label>
                <input type="number" class="form-control" id="stok_tambah" name="stok_tambah" value="{{ $stokBahan->stok_tambah }}" required>
            </div>

            <div class="form-group">
                <label for="stok_keluar">Stok Keluar</label>
                <input type="number" class="form-control" id="stok_keluar" name="stok_keluar" value="{{ $stokBahan->stok_keluar }}" required>
            </div>

            <div class="form-group">
                <label for="stok_sisa">Stok Sisa</label>
                <input type="number" class="form-control" id="stok_sisa" name="stok_sisa" value="{{ $stokBahan->stok_sisa }}" required>
            </div>

            <div class="form-group">
                <label for="angka_perolehan">Angka Perolehan</label>
                <input type="number" class="form-control" id="angka_perolehan" name="angka_perolehan" value="{{ $stokBahan->angka_perolehan }}" required>
            </div>

            <div class="form-group">
                <label for="angka_penyusutan">Angka Penyusutan</label>
                <input type="number" class="form-control" id="angka_penyusutan" name="angka_penyusutan" value="{{ $stokBahan->angka_penyusutan }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
