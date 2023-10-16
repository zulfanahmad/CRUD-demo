@extends('layouts.app')

@section('content')
    <h1>Edit Referensi Bahasa</h1>

    <form method="POST" action="{{ route('referensibahasas.update', $bahasa->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_bahasa">Nama Bahasa</label>
            <input type="text" id="nama_bahasa" name="nama_bahasa" class="form-control" value="{{ $bahasa->nama_bahasa }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $bahasa->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

