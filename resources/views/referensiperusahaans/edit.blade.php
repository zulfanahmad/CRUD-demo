@extends('layouts.app')

@section('content')
    <h1>Edit Referensi Perusahaan</h1>

    <form method POST" action="{{ route('referensiperusahaans.update', $referensi->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="perusahaan_id">Perusahaan ID</label>
            <input type="text" id="perusahaan_id" name="perusahaan_id" class="form-control" value="{{ $referensi->perusahaan_id }}">
        </div>
        <div class="form-group">
            <label for="akun_bank">Akun Bank</label>
            <input type="text" id="akun_bank" name="akun_bank" class="form-control" value="{{ $referensi->akun_bank }}">
        </div>
        <div class="form-group">
            <label for="alamat_email">Alamat Email</label>
            <input type="text" id="alamat_email" name="alamat_email" class="form-control" value="{{ $referensi->alamat_email }}">
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" value="{{ $referensi->nomor_telepon }}">
        </div>
        <div class="form-group">
            <label for="alamat_kantor">Alamat Kantor</label>
            <input type="text" id="alamat_kantor" name="alamat_kantor" class="form-control" value="{{ $referensi->alamat_kantor }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

