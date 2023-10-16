@extends('layouts.app')

@section('content')
    <h1>Tambah Pesanan Pembelian Baru</h1>

    <form method="POST" action="{{ route('pesananpembelians.store') }}">
        @csrf
        <div class="form-group">
            <label for="nomor_pesanan">Nomor Pesanan</label>
            <input type="text" id="nomor_pesanan" name="nomor_pesanan" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal_pesanan">Tanggal Pesanan</label>
            <input type="text" id="tanggal_pesanan" name="tanggal_pesanan" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection




