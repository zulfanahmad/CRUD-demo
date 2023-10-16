@extends('layouts.app')

@section('content')
    <h1>Detail Pekerjaan</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $pekerjaan->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $pekerjaan->nama }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $pekerjaan->deskripsi }}</td>
        </tr>
        <tr>
            <th>Tipe Pekerjaan ID</th>
            <td>{{ $pekerjaan->tipe_pekerjaan_id }}</td>
        </tr>
    </table>

    <a href="{{ route('pekerjaans.edit', $pekerjaan->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

