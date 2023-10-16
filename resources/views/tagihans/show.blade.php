@extends('layouts.app')

@section('content')
    <h1>Detail Tagihan</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $tagihan->id }}</td>
        </tr>
        <tr>
            <th>Klien ID</th>
            <td>{{ $tagihan->klien_id }}</td>
        </tr>
        <tr>
            <th>Proyek ID</th>
            <td>{{ $tagihan->proyek_id }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $tagihan->jumlah }}</td>
        </tr>
        <tr>
            <th>Tanggal Tagihan</th>
            <td>{{ $tagihan->tanggal_tagihan }}</td>
        </tr>
    </table>

    <a href="{{ route('tagihans.edit', $tagihan->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

