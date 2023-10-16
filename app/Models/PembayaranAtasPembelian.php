<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranAtasPembelian extends Model
{
    use HasFactory;

    protected $fillable = ['klien_id', 'jumlah', 'tanggal_pembayaran'];

    public function klien()
    {
        return $this->belongsTo(Klien::class, 'klien_id');
    }
}

