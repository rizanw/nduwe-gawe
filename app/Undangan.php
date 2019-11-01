<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    //
    protected $fillable = [
        'user_id',
        'paket_id',
        'nama_acara',
        'tuan_rumah',
        'jumlah_undangan_kosong',
    ];
}
