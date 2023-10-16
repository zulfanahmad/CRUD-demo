@extends('layouts.app')

@section('content')
    <h1>Tambah Tagihan Baru</h1>

    <form method="POST" action="{{ route('tagihans.store') }}">
        @csrf
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="proyek_id">Proyek ID</label>
            <input type="text" id="proyek_id" name="proyek_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" id="jumlah" name="jumlah" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal_tagihan">Tanggal Tagihan</label>
            <input type="text" id="tanggal_tagihan" name="tanggal_tagihan" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

