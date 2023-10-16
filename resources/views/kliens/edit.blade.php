@extends('layouts.app')

@section('content')
    <h1>Edit Klien</h1>

    <form method="POST" action="{{ route('kliens.update', $klien->id) }}">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

