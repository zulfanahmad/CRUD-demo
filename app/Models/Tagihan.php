
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $fillable = ['klien_id', 'proyek_id', 'jumlah', 'tanggal_tagihan'];

    public function klien()
    {
        return $this->belongsTo(Klien::class, 'klien_id');
    }

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'proyek_id');
    }
}

