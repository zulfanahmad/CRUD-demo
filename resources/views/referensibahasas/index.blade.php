@extends('layouts.app')

@section('content')
    <h1>Daftar Referensi Bahasa</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Bahasa</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($referensibahasas as $bahasa)
                <tr>
                    <td>{{ $bahasa->id }}</td>
                    <td>{{ $bahasa->nama_bahasa }}</td>
                    <td>{{ $bahasa->deskripsi }}</td>
                    <td>
                        <a href="{{ route('referensibahasas.show', $bahasa->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('referensibahasas.edit', $bahasa->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('referensibahasas.create') }}" class="btn btn-success">Tambah Referensi Bahasa</a>
@endsection

