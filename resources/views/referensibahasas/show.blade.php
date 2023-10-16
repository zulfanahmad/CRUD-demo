@extends('layouts.app')

@section('content')
    <h1>Detail Referensi Bahasa</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $bahasa->id }}</td>
        </tr>
        <tr>
            <th>Nama Bahasa</th>
            <td>{{ $bahasa->nama_bahasa }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $bahasa->deskripsi }}</td>
        </tr>
    </table>

    <a href="{{ route('referensibahasas.edit', $bahasa->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

