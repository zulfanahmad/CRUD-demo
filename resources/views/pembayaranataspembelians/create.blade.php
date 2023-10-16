@extends('layouts.app')

@section('content')
    <h1>Tambah Pembayaran Atas Pembelian Baru</h1>

    <form method="POST" action="{{ route('pembayaranataspembelians.store') }}">
        @csrf
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" id="jumlah" name="jumlah" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
            <input type="text" id="tanggal_pembayaran" name="tanggal_pembayaran" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

