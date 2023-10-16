@extends('layouts.app')

@section('content')
    <h1>Daftar Pembayaran Atas Pembelian</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Klien ID</th>
                <th>Jumlah</th>
                <th>Tanggal Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayaranataspembelians as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->id }}</td>
                    <td>{{ $pembayaran->klien_id }}</td>
                    <td>{{ $pembayaran->jumlah }}</td>
                    <td>{{ $pembayaran->tanggal_pembayaran }}</td>
                    <td>
                        <a href="{{ route('pembayaranataspembelians.show', $pembayaran->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('pembayaranataspembelians.edit', $pembayaran->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('pembayaranataspembelians.create') }}" class="btn btn-success">Tambah Pembayaran Atas Pembelian</a>
@endsection

