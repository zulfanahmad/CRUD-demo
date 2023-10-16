@extends('layouts.app')

@section('content')
    <h1>Edit Pesanan Pembelian</h1>

    <form method="POST" action="{{ route('pesananpembelians.update', $pesanan->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomor_pesanan">Nomor Pesanan</label>
            <input type="text" id="nomor_pesanan" name="nomor_pesanan" class="form-control" value="{{ $pesanan->nomor_pesanan }}">
        </div>
        <div class="form-group">
            <label for="tanggal_pesanan">Tanggal Pesanan</label>
            <input type="text" id="tanggal_pesanan" name="tanggal_pesanan" class="form-control" value="{{ $pesanan->tanggal_pesanan }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

