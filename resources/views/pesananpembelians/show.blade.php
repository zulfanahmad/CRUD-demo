@extends('layouts.app')

@section('content')
    <h1>Detail Pesanan Pembelian</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $pesanan->id }}</td>
        </tr>
        <tr>
            <th>Nomor Pesanan</th>
            <td>{{ $pesanan->nomor_pesanan }}</td>
        </tr>
        <tr>
            <th>Tanggal Pesanan</th>
            <td>{{ $pesanan->tanggal_pesanan }}</td>
        </tr>
    </table>

    <a href="{{ route('pesananpembelians.edit', $pesanan->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

