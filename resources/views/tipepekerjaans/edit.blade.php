@extends('layouts.app')

@section('content')
    <h1>Edit Tipe Pekerjaan</h1>

    <form method="POST" action="{{ route('tipepekerjaans.update', $tipepekerjaan->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Tipe Pekerjaan</label>
            <input type="text" id="nama" name="nama" class="form-control" value="{{ $tipepekerjaan->nama }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $tipepekerjaan->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

