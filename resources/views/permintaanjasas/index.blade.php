@extends('layouts.app')

@section('content')
    <h1>Daftar Permintaan Jasa</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Klien ID</th>
                <th>Pekerjaan ID</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($permintaanjasas as $permintaanjasa)
                <tr>
                    <td>{{ $permintaanjasa->id }}</td>
                    <td>{{ $permintaanjasa->klien_id }}</td>
                    <td>{{ $permintaanjasa->pekerjaan_id }}</td>
                    <td>{{ $permintaanjasa->deskripsi }}</td>
                    <td>
                        <a href="{{ route('permintaanjasas.show', $permintaanjasa->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('permintaanjasas.edit', $permintaanjasa->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('permintaanjasas.create') }}" class="btn btn-success">Tambah Permintaan Jasa</a>
@endsection

