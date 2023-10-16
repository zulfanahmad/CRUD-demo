@extends('layouts.app')

@section('content')
    <h1>Edit Pembayaran Atas Pembelian</h1>

    <form method="POST" action="{{ route('pembayaranataspembelians.update', $pembayaran->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="klien_id">Klien ID</label>
            <input type="text" id="klien_id" name="klien_id" class="form-control" value="{{ $pembayaran->klien_id }}">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" id="jumlah" name="jumlah" class="form-control" value="{{ $pembayaran->jumlah }}">
        </div>
        <div class="form-group">
            <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
            <input type="text" id="tanggal_pembayaran" name="tanggal_pembayaran" class="form-control" value="{{ $pembayaran->tanggal_pembayaran }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

