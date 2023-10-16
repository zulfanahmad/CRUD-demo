@extends('layouts.app')

@section('content')
    <h1>Edit Permintaan Jasa</h1>

    <form method="POST" action="{{ route('permintaanjasas.update', $permintaanjasa->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control" value="{{ $permintaanjasa->klien_id }}">
        </div>
        <div class="form-group">
            <label for="pekerjaan_id">Pekerjaan ID</label>
            <input type="text" id="pekerjaan_id" name="pekerjaan_id" class="form-control" value="{{ $permintaanjasa->pekerjaan_id }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control">{{ $permintaanjasa->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

