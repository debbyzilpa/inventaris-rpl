@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <h1>Daftar Stok Bahan</h1>

        <a href="{{ route('stok_bahan.create') }}" class="btn btn-primary mb-3">Tambah Stok Bahan</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Bahan</th>
                    <th>Stok Awal</th>
                    <th>Stok Tambah</th>
                    <th>Stok Keluar</th>
                    <th>Stok Sisa</th>
                    <th>Angka Perolehan</th>
                    <th>Angka Penyusutan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stokBahan as $item)
                    <tr>
                        <td>{{ $item->nama_bahan }}</td>
                        <td>{{ $item->stok_awal }}</td>
                        <td>{{ $item->stok_tambah }}</td>
                        <td>{{ $item->stok_keluar }}</td>
                        <td>{{ $item->stok_sisa }}</td>
                        <td>{{ $item->angka_perolehan }}</td>
                        <td>{{ $item->angka_penyusutan }}</td>
                        <td>
                            <a href="{{ route('stok_bahan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('stok_bahan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
