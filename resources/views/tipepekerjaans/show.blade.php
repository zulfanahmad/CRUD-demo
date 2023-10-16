@extends('layouts.app')

@section('content')
    <h1>Detail Tipe Pekerjaan</h1>

    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $tipepekerjaan->nama }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $tipepekerjaan->deskripsi }}</td>
        </tr>
    </table>

    <a href="{{ route('tipepekerjaans.edit', $tipepekerjaan->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

