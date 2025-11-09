<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warta extends Model
{
    //
     protected $fillable = ['judul', 'tanggal', 'file_path'];

     protected $casts = [
        'tanggal' => 'date',
    ];
}
