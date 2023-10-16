@extends('layouts.app')

@section('content')
    <h1>Tambah Permintaan Jasa Baru</h1>

    <form method="POST" action="{{ route('permintaanjasas.store') }}">
        @csrf
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="pekerjaan_id">Pekerjaan ID</label>
            <input type="text" id="pekerjaan_id" name="pekerjaan_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

