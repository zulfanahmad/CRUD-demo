@extends('layouts.app')

@section('content')
    <h1>Detail Pembayaran Atas Pembelian</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $pembayaran->id }}</td>
        </tr>
        <tr>
            <th>Klien ID</th>
            <td>{{ $pembayaran->klien_id }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $pembayaran->jumlah }}</td>
        </tr>
        <tr>
            <th>Tanggal Pembayaran</th>
            <td>{{ $pembayaran->tanggal_pembayaran }}</td>
        </tr>
    </table>

    <a href="{{ route('pembayaranataspembelians.edit', $pembayaran->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

