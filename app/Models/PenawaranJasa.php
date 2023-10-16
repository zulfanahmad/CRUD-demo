<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenawaranJasa extends Model
{
    use HasFactory;
}




<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenawaranJasa extends Model
{
    use HasFactory;

    protected $fillable = ['klien_id', 'pekerjaan_id', 'deskripsi', 'harga'];

    public function klien()
    {
        return $this->belongsTo(Klien::class, 'klien_id');
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id');
    }

