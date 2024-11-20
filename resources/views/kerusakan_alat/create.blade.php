@extends('layouts.admin_master')

@section('content')
    <h1>Tambah Kerusakan Alat</h1>

    <form action="{{ route('kerusakan_alat.store') }}" method="POST">
        @csrf
        <div>
            <label>ID Alat:</label>
            <input type="text" name="id_alat" required>
        </div>
        <div>
            <label>Spesifikasi:</label>
            <textarea name="spesifikasi"></textarea>
        </div>
        <div>
            <label>Kerusakan:</label>
            <textarea name="kerusakan" required></textarea>
        </div>
        <div>
            <label>Tanggal Kerusakan:</label>
            <input type="date" name="tgl_kerusakan" required>
        </div>
        <div>
            <label>Keterangan:</label>
            <textarea name="keterangan"></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection
