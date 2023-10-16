<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'tipe_pekerjaan_id'];

    public function tipePekerjaan()
    {
        return $this->belongsTo(TipePekerjaan::class, 'tipe_pekerjaan_id');
    }

