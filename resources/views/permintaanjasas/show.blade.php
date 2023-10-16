@extends('layouts.app')

@section('content')
    <h1>Detail Permintaan Jasa</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $permintaanjasa->id }}</td>
        </tr>
        <tr>
            <th>Klien ID</th>
            <td>{{ $permintaanjasa->klien_id }}</td>
        </tr>
        <tr>
            <th>Pekerjaan ID</th>
            <td>{{ $permintaanjasa->pekerjaan_id }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $permintaanjasa->deskripsi }}</td>
        </tr>
    </table>

    <a href="{{ route('permintaanjasas.edit', $permintaanjasa->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

