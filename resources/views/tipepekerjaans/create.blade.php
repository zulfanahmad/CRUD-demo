@extends('layouts.app')

@section('content')
    <h1>Tambah Tipe Pekerjaan Baru</h1>

    <form method="POST" action="{{ route('tipepekerjaans.store') }}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Tipe Pekerjaan</label>
            <input type="text" id="nama" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

