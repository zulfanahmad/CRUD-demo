@extends('layouts.app')

@section('content')
    <h1>Edit Proyek</h1>

    <form method="POST" action="{{ route('proyeks.update', $proyek->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Proyek</label>
            <input type="text" id="nama" name="nama" class="form-control" value="{{ $proyek->nama }}">
        </div>
        <div class="form-group">
            <label for="tanggal_mulai">Tanggal Mulai</label>
            <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control" value="{{ $proyek->tanggal_mulai }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $proyek->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control" value="{{ $proyek->klien_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

