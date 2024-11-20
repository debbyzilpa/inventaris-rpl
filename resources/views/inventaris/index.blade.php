@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Data Inventaris</h1>
    <a href="{{ route('inventaris.create') }}" class="btn btn-primary">Tambah Inventaris</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>No.Inventaris</th>
                <th>Spesifikasi</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventaris as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_alat }}</td>
                <td>{{ $item->no_inventaris }}</td>
                <td>{{ $item->spesifikasi }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->kondisi }}</td>
                <td>
                    <a href="{{ route('inventaris.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('inventaris.destroy', $item->id) }}" method="POST" style="display:inline;">
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
