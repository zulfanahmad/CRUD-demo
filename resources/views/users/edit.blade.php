@extends('layouts.app')

@section('content')
    <h1>Edit Pengguna</h1>

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

