@extends('layouts.app')

@section('content')
    <h1>Edit Tagihan</h1>

    <form method="POST" action="{{ route('tagihans.update', $tagihan->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control" value="{{ $tagihan->klien_id }}">
        </div>
        <div class="form-group">
            <label for="proyek_id">Proyek ID</label>
            <input type="text" id="proyek_id" name="proyek_id" class="form-control" value="{{ $tagihan->proyek_id }}">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" id="jumlah" name="jumlah" class="form-control" value="{{ $tagihan->jumlah }}">
        </div>
        <div class="form-group">
            <label for="tanggal_tagihan">Tanggal Tagihan</label>
            <input type="text" id="tanggal_tagihan" name="tanggal_tagihan" class="form-control" value="{{ $tagihan->tanggal_tagihan }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

