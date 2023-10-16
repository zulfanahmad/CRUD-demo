@extends('layouts.app')

@section('content')
    <h1>Daftar Referensi Perusahaan</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Perusahaan ID</th>
                <th>Akun Bank</th>
                <th>Alamat Email</th>
                <th>Nomor Telepon</th>
                <th>Alamat Kantor</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($referensiperusahaans as $referensi)
                <tr>
                    <td>{{ $referensi->id }}</td>
                    <td>{{ $referensi->perusahaan_id }}</td>
                    <td>{{ $referensi->akun_bank }}</td>
                    <td>{{ $referensi->alamat_email }}</td>
                    <td>{{ $referensi->nomor_telepon }}</td>
                    <td>{{ $referensi->alamat_kantor }}</td>
                    <td>
                        <a href="{{ route('referensiperusahaans.show', $referensi->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('referensiperusahaans.edit', $referensi->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('referensiperusahaans.create') }}" class="btn btn-success">Tambah Referensi Perusahaan</a>
@endsection

