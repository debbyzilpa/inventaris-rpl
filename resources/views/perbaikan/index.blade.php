@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Daftar Perbaikan</h1>
    <a href="{{ route('perbaikan.create') }}" class="btn btn-primary">Tambah Perbaikan</a>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <table class="table">
        <thead>
            <tr>
                <th>ID Alat</th>
                <th>Tanggal Perbaikan</th>
                <th>Keterangan</th>
                <th>Paraf Teknisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perbaikan as $item)
                <tr>
                    <td>{{ $item->id_alat }}</td>
                    <td>{{ $item->tgl_perbaikan }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->paraf_teknisi }}</td>
                    <td>
                        <a href="{{ route('perbaikan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('perbaikan.destroy', $item->id) }}" method="POST" style="display:inline;">
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
