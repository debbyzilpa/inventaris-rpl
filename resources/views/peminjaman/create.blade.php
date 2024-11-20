@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Peminjaman</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_alat" class="form-label">Alat</label>
            <select class="form-control" id="id_alat" name="id_alat" required>
                @foreach($inventaris as $alat)
                    <option value="{{ $alat->id }}">{{ $alat->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_peminjaman" class="form-label">Peminjam</label>
            <select class="form-control" id="id_peminjaman" name="id_peminjaman" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>

        <div class="mb-3">
            <label for="tgl_peminjaman" class="form-label">Tanggal Peminjaman</label>
            <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman" required>
        </div>

        <div class="mb-3">
            <label for="kondisi_pinjam" class="form-label">Kondisi Pinjam</label>
            <select class="form-control" id="kondisi_pinjam" name="kondisi_pinjam" required>
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
