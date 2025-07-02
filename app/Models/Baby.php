<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nama_ibu',
        'nama_ayah',
        'tanggal_lahir'
    ];
}
