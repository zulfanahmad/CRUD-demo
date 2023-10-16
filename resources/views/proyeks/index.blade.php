@extends('layouts.app')

@section('content')
    <h1>Daftar Proyek</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Deskripsi</th>
                <th>Klien ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyeks as $proyek)
                <tr>
                    <td>{{ $proyek->id }}</td>
                    <td>{{ $proyek->nama }}</td>
                    <td>{{ $proyek->tanggal_mulai }}</td>
                    <td>{{ $proyek->deskripsi }}</td>
                    <td>{{ $proyek->klien_id }}</td>
                    <td>
                        <a href="{{ route('proyeks.show', $proyek->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('proyeks.edit', $proyek->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('proyeks.create') }}" class="btn btn-success">Tambah Proyek</a>
@endsection

