@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Edit Pengembalian</h1>
    <form action="{{ route('pengembalian.update', $pengembalian->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="number" class="form-control" id="id_alat" name="id_alat" value="{{ $pengembalian->id_alat }}" required>
        </div>
        <div class="mb-3">
            <label for="id_peminjaman" class="form-label">ID Peminjaman</label>
            <input type="number" class="form-control" id="id_peminjaman" name="id_peminjaman" value="{{ $pengembalian->id_peminjaman }}" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $pengembalian->jumlah }}" required min="1">
        </div>
        <div class="mb-3">
            <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="{{ $pengembalian->tgl_kembali }}" required>
        </div>
        <div class="mb-3">
            <label for="kondisi_kembali" class="form-label">Kondisi Kembali</label>
            <select class="form-select" id="kondisi_kembali" name="kondisi_kembali" required>
                <option value="Baik" {{ $pengembalian->kondisi_kembali == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Rusak" {{ $pengembalian->kondisi_kembali == 'Rusak' ? 'selected' : '' }}>Rusak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
