<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiBahasa extends Model
{
    use HasFactory;

    protected $fillable = ['nama_bahasa', 'deskripsi'];
}

