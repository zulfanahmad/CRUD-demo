@extends('layouts.app')

@section('content')
    <h1>Detail Klien</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $klien->id }}</td>
        </tr>
        <tr>
            <th>Waktu Dibuat</th>
            <td>{{ $klien->created_at }}</td>
        </tr>
    </table>

    <a href="{{ route('kliens.edit', $klien->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

