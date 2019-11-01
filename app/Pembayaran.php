<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    //
    protected $fillable = [
        'undangan_id',
        'total_bayar',
        'bukti_bayar',
        'status',
    ];
}
