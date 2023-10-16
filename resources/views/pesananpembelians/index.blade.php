@extends('layouts.app')

@section('content')
    <h1>Daftar Pesanan Pembelian</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor Pesanan</th>
                <th>Tanggal Pesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesananpembelians as $pesanan)
                <tr>
                    <td>{{ $pesanan->id }}</td>
                    <td>{{ $pesanan->nomor_pesanan }}</td>
                    <td>{{ $pesanan->tanggal_pesanan }}</td>
                    <td>
                        <a href="{{ route('pesananpembelians.show', $pesanan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('pesananpembelians.edit', $pesanan->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('pesananpembelians.create') }}" class="btn btn-success">Tambah Pesanan Pembelian</a>
@endsection


