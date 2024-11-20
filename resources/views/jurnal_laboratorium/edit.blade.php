@extends('layouts.admin_master')

@section('content')
<div class="container">
    <h1>Edit Data Laboratorium</h1>
    <form action="{{ route('jurnal_laboratorium.update', $jurnalLaboratorium->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="{{ $jurnalLaboratorium->hari }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl" class="form-control" value="{{ $jurnalLaboratorium->tgl }}" required>
        </div>
        <div class="form-group">
            <label>Mapel</label>
            <input type="text" name="mapel" class="form-control" value="{{ $jurnalLaboratorium->mapel }}" required>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $jurnalLaboratorium->kelas }}" required>
        </div>
        <div class="form-group">
            <label>Guru</label>
            <input type="text" name="guru" class="form-control" value="{{ $jurnalLaboratorium->guru }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
