@extends('layouts.app')

@section('content')
    <h1>Detail Pengguna</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
    </table>

    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection

