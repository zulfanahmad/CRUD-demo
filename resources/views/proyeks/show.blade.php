@extends('layouts.app')

@section('content')
    <h1>Detail Proyek</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $proyek->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $proyek->nama }}</td>
        </tr>
        <tr>
            <th>Tanggal Mulai</th>
            <td>{{ $proyek->tanggal_mulai }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $proyek->deskripsi }}</td>
        </tr>
        <tr>
            <th>Klien ID</th>
            <td>{{ $proyek->klien_id }}</td>
        </tr>
    </table>

    <a href="{{ route('proyeks.edit', $proyek->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

