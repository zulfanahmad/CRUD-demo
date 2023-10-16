@extends('layouts.app')

@section('content')
    <h1>Edit Pekerjaan</h1>

    <form method="POST" action="{{ route('pekerjaans.update', $pekerjaan->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for "nama">Nama Pekerjaan</label>
            <input type="text" id="nama" name="nama" class="form-control" value="{{ $pekerjaan->nama }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $pekerjaan->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="tipe_pekerjaan_id">Tipe Pekerjaan ID</label>
            <input type="text" id="tipe_pekerjaan_id" name="tipe_pekerjaan_id" class="form-control" value="{{ $pekerjaan->tipe_pekerjaan_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

