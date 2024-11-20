@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Tambah Perbaikan</h1>
    <form action="{{ route('perbaikan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="number" class="form-control" id="id_alat" name="id_alat" required>
        </div>
        <div class="mb-3">
            <label for="tgl_perbaikan" class="form-label">Tanggal Perbaikan</label>
            <input type="date" class="form-control" id="tgl_perbaikan" name="tgl_perbaikan" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
        <div class="mb-3">
            <label for="paraf_teknisi" class="form-label">Paraf Teknisi</label>
            <input type="text" class="form-control" id="paraf_teknisi" name="paraf_teknisi" maxlength="100">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('perbaikan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
