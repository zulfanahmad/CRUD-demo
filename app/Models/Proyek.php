<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'tanggal_mulai', 'deskripsi', 'klien_id'];

    public function klien()
    {
        return $this->belongsTo(Klien::class, 'klien_id'); 
    }
}

