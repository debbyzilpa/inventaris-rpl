@extends('layouts.admin_master')

@section('content')
    <h1>Edit Kerusakan Alat</h1>

    <form action="{{ route('kerusakan_alat.update', $kerusakanAlat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>ID Alat:</label>
            <input type="text" name="id_alat" value="{{ $kerusakanAlat->id_alat }}" required>
        </div>
        <div>
            <label>Spesifikasi:</label>
            <textarea name="spesifikasi">{{ $kerusakanAlat->spesifikasi }}</textarea>
        </div>
        <div>
            <label>Kerusakan:</label>
            <textarea name="kerusakan" required>{{ $kerusakanAlat->kerusakan }}</textarea>
        </div>
        <div>
            <label>Tanggal Kerusakan:</label>
            <input type="date" name="tgl_kerusakan" value="{{ $kerusakanAlat->tgl_kerusakan }}" required>
        </div>
        <div>
            <label>Keterangan:</label>
            <textarea name="keterangan">{{ $kerusakanAlat->keterangan }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
