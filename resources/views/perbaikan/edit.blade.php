@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Edit Perbaikan</h1>
    <form action="{{ route('perbaikan.update', $perbaikan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="number" class="form-control" id="id_alat" name="id_alat" value="{{ $perbaikan->id_alat }}" required>
        </div>
        <div class="mb-3">
            <label for="tgl_perbaikan" class="form-label">Tanggal Perbaikan</label>
            <input type="date" class="form-control" id="tgl_perbaikan" name="tgl_perbaikan" value="{{ $perbaikan->tgl_perbaikan }}" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan">{{ $perbaikan->keterangan }}</textarea>
        </div>
        <div class="mb-3">
            <label for="paraf_teknisi" class="form-label">Paraf Teknisi</label>
            <input type="text" class="form-control" id="paraf_teknisi" name="paraf_teknisi" value="{{ $perbaikan->paraf_teknisi }}" maxlength="100">
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
