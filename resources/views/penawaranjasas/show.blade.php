@extends('layouts.app')

@section('content')
    <h1>Detail Penawaran Jasa</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $penawaranjasa->id }}</td>
        </tr>
        <tr>
            <th>Klien ID</th>
            <td>{{ $penawaranjasa->klien_id }}</td>
        </tr>
        <tr>
            <th>Pekerjaan ID</th>
            <td>{{ $penawaranjasa->pekerjaan_id }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $penawaranjasa->deskripsi }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>{{ $penawaranjasa->harga }}</td>
        </tr>
    </table>

    <a href="{{ route('penawaranjasas.edit', $penawaranjasa->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

