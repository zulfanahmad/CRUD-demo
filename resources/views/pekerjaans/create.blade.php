@extends('layouts.app')

@section('content')
    <h1>Tambah Pekerjaan Baru</h1>

    <form method="POST" action="{{ route('pekerjaans.store') }}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pekerjaan</label>
            <input type="text" id="nama" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="tipe_pekerjaan_id">Tipe Pekerjaan ID</label>
            <input type="text" id="tipe_pekerjaan_id" name="tipe_pekerjaan_id" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

