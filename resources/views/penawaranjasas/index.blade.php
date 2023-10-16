@extends('layouts.app')

@section('content')
    <h1>Daftar Penawaran Jasa</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Klien ID</th>
                <th>Pekerjaan ID</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penawaranjasas as $penawaranjasa)
                <tr>
                    <td>{{ $penawaranjasa->id }}</td>
                    <td>{{ $penawaranjasa->klien_id }}</td>
                    <td>{{ $penawaranjasa->pekerjaan_id }}</td>
                    <td>{{ $penawaranjasa->deskripsi }}</td>
                    <td>{{ $penawaranjasa->harga }}</td>
                    <td>
                        <a href="{{ route('penawaranjasas.show', $penawaranjasa->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('penawaranjasas.edit', $penawaranjasa->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('penawaranjasas.create') }}" class="btn btn-success">Tambah Penawaran Jasa</a>
@endsection

