<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    //
    protected $fillable = [
        'undangan_id',
        'kode_tamu',
        'nama',
        'alamat',
        'no_hp',
        'status_id'
    ];

    public function status(){
        return $this->hasOne(Tamu_Status::class, 'id', 'status_id');
    }
}
