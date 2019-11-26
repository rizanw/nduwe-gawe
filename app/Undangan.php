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
        'desain_undangan',
        'jumlah_undangan_kosong',
    ];


    public function undangan_pernikahan(){
        return $this->hasOne(Undangan_Pernikahan::class, 'undangan_id');
    }

    public function undangan_custom(){
        return $this->hasOne(Undangan_Custom::class, 'undangan_id');
    }

}
