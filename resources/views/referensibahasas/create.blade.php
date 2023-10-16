@extends('layouts.app')

@section('content')
    <h1>Tambah Referensi Bahasa Baru</h1>

    <form method="POST" action="{{ route('referensibahasas.store') }}">
        @csrf
        <div class="form-group">
            <label for="nama_bahasa">Nama Bahasa</label>
            <input type="text" id="nama_bahasa" name="nama_bahasa" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

