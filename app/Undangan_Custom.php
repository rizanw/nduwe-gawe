<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Undangan_Custom extends Model
{
    //
    protected $fillable = [
        'undangan_id',
        'nama',
        'tempat',
        'alamat',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
    ];
}
