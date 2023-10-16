@extends('layouts.app')

@section('content')
    <h1>Tambah Proyek Baru</h1>

    <form method="POST" action="{{ route('proyeks.store') }}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Proyek</label>
            <input type="text" id="nama" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal_mulai">Tanggal Mulai</label>
            <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

