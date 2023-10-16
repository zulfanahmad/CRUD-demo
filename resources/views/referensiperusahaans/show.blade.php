@extends('layouts.app')

@section('content')
    <h1>Detail Referensi Perusahaan</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $referensi->id }}</td>
        </tr>
        <tr>
            <th>Perusahaan ID</th>
            <td>{{ $referensi->perusahaan_id }}</td>
        </tr>
        <tr>
            <th>Akun Bank</th>
            <td>{{ $referensi->akun_bank }}</td>
        </tr>
        <tr>
            <th>Alamat Email</th>
            <td>{{ $referensi->alamat_email }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $referensi->nomor_telepon }}</td>
        </tr>
        <tr>
            <th>Alamat Kantor</th>
            <td>{{ $referensi->alamat_kantor }}</td>
        </tr>
    </table>

    <a href="{{ route('referensiperusahaans.edit', $referensi->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

