<?php

use App\Paket;
use Illuminate\Database\Seeder;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $paket = new Paket();
        $paket->nama = "Paket 1";
        $paket->harga = "400000";
        $paket->save();

        $paket = new Paket();
        $paket->nama = "Paket 2";
        $paket->harga = "700000";
        $paket->save();
    }
}
