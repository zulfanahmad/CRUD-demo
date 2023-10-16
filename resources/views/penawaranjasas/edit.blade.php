@extends('layouts.app')

@section('content')
    <h1>Edit Penawaran Jasa</h1>

    <form method="POST" action="{{ route('penawaranjasas.update', $penawaranjasa->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control" value="{{ $penawaranjasa->klien_id }}">
        </div>
        <div class="form-group">
            <label for="pekerjaan_id">Pekerjaan ID</label>
            <input type="text" id="pekerjaan_id" name="pekerjaan_id" class="form-control" value="{{ $penawaranjasa->pekerjaan_id }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $penawaranjasa->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" id="harga" name="harga" class="form-control" value="{{ $penawaranjasa->harga }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

