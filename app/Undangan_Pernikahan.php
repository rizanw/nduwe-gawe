<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Undangan_Pernikahan extends Model
{
    //
    protected $fillable = [
        'undangan_id',
        'Nama_Pria',
        'Ibu_Pria',
        'Bapak_Pria',
        'Nama_Wanita',
        'Ibu_Wanita',
        'Bapak_Wanita',
        'tanggal_akad',
        'jam_mulai_akad',
        'jam_selesai_akad',
        'tempat_akad',
        'tanggal_resepsi',
        'jam_mulai_resepsi',
        'jam_selesai_resepsi',
        'tempat_resepsi',
    ];
}
