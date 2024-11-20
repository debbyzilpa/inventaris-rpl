@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Daftar Pengembalian</h1>
    <a href="{{ route('pengembalian.create') }}" class="btn btn-primary">Tambah Pengembalian</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Alat</th>
                <th>ID Peminjaman</th>
                <th>Jumlah</th>
                <th>Tanggal Kembali</th>
                <th>Kondisi Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengembalian as $item)
                <tr>
                    <td>{{ $item->id_alat }}</td>
                    <td>{{ $item->id_peminjaman }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->tgl_kembali }}</td>
                    <td>{{ $item->kondisi_kembali }}</td>
                    <td>
                        <a href="{{ route('pengembalian.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pengembalian.destroy', $item->id) }}" method="POST" style="display:inline;">
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
