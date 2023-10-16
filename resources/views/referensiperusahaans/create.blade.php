@extends('layouts.app')

@section('content')
    <h1>Tambah Referensi Perusahaan Baru</h1>

    <form method="POST" action="{{ route('referensiperusahaans.store') }}">
        @csrf
        <div class="form-group">
            <label for="perusahaan_id">Perusahaan ID</label>
            <input type="text" id="perusahaan_id" name="perusahaan_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="akun_bank">Akun Bank</label>
            <input type="text" id="akun_bank" name="akun_bank" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat_email">Alamat Email</label>
            <input type="text" id="alamat_email" name="alamat_email" class="form-control">
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat_kantor">Alamat Kantor</label>
            <input type="text" id="alamat_kantor" name="alamat_kantor" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

