<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiPerusahaan extends Model
{
    use HasFactory;

    protected $fillable = ['perusahaan_id', 'akun_bank', 'alamat_email', 'nomor_telepon', 'alamat_kantor'];
}
