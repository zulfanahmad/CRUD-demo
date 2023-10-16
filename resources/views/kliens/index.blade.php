@extends('layouts.app')

@section('content')
    <h1>Daftar Klien</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Waktu Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kliens as $klien)
                <tr>
                    <td>{{ $klien->id }}</td>
                    <td>{{ $klien->created_at }}</td>
                    <td>
                        <a href="{{ route('kliens.show', $klien->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('kliens.edit', $klien->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('kliens.create') }}" class="btn btn-success">Tambah Klien</a>
@endsection

