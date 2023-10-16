@extends('layouts.app')

@section('content')
    <h1>Daftar Tagihan</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Klien ID</th>
                <th>Proyek ID</th>
                <th>Jumlah</th>
                <th>Tanggal Tagihan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tagihans as $tagihan)
                <tr>
                    <td>{{ $tagihan->id }}</td>
                    <td>{{ $tagihan->klien_id }}</td>
                    <td>{{ $tagihan->proyek_id }}</td>
                    <td>{{ $tagihan->jumlah }}</td>
                    <td>{{ $tagihan->tanggal_tagihan }}</td>
                    <td>
                        <a href="{{ route('tagihans.show', $tagihan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('tagihans.edit', $tagihan->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('tagihans.create') }}" class="btn btn-success">Tambah Tagihan</a>
@endsection

