@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Daftar Laboratorium</h1>
    <a href="{{ route('jurnal_laboratorium.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Mapel</th>
                <th>Kelas</th>
                <th>Guru</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurnalLaboratorium as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->hari }}</td>
                <td>{{ $item->tgl }}</td>
                <td>{{ $item->mapel }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->guru }}</td>
                <td>
                    <a href="{{ route('jurnal_laboratorium.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('jurnal_laboratorium.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
