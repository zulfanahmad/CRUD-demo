@extends('layouts.app')

@section('content')
    <h1>Tambah Klien Baru</h1>

    <form method="POST" action="{{ route('kliens.store') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

