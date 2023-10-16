@extends('layouts.app')

@section('content')
    <h1>Daftar Tipe Pekerjaan</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipepekerjaans as $tipepekerjaan)
                <tr>
                    <td>{{ $tipepekerjaan->nama }}</td>
                    <td>{{ $tipepekerjaan->deskripsi }}</td>
                    <td>
                        <a href="{{ route('tipepekerjaans.show', $tipepekerjaan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('tipepekerjaans.edit', $tipepekerjaan->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('tipepekerjaans.create') }}" class="btn btn-success">Tambah Tipe Pekerjaan</a>
@endsection

