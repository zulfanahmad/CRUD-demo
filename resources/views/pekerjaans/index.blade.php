@extends('layouts.app')

@section('content')
    <h1>Daftar Pekerjaan</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tipe Pekerjaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pekerjaans as $pekerjaan)
                <tr>
                    <td>{{ $pekerjaan->id }}</td>
                    <td>{{ $pekerjaan->nama }}</td>
                    <td>{{ $pekerjaan->deskripsi }}</td>
                    <td>{{ $pekerjaan->tipe_pekerjaan_id }}</td>
                    <td>
                        <a href="{{ route('pekerjaans.show', $pekerjaan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('pekerjaans.edit', $pekerjaan->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('pekerjaans.create') }}" class="btn btn-success">Tambah Pekerjaan</a>
@endsection

