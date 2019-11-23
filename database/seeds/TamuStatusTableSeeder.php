<?php

use App\Tamu_Status;
use Illuminate\Database\Seeder;

class TamuStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status1 = new Tamu_Status();
        $status1->nama = "menunggu";
        $status1->deskripsi = "menunggu proses pembayaran";
        $status1->save();

        $status2 = new Tamu_Status();
        $status2->nama = "mengirim";
        $status2->deskripsi = "undangan sedang dikirim ke tujuan";
        $status2->save();

        $status3 = new Tamu_Status();
        $status3->nama = "dikirim";
        $status3->deskripsi = "undangan telah tiba ditujuan";
        $status3->save();

        $status4 = new Tamu_Status();
        $status4->nama = "diterima";
        $status4->deskripsi = "undangan telah diterima";
        $status4->save();

        $status5 = new Tamu_Status();
        $status5->nama = "akan hadir";
        $status5->deskripsi = "tamu mengkonfirmasi akan hadir";
        $status5->save();

        $status6 = new Tamu_Status();
        $status6->nama = "tidak bisa hadir";
        $status6->deskripsi = "tamu mengkonfirmasi tidak bisa hadir";
        $status6->save();

        $status7 = new Tamu_Status();
        $status7->nama = "hadir";
        $status7->deskripsi = "tamu telah dikonfirmasi hadir di undangan";
        $status7->save();

        $status8 = new Tamu_Status();
        $status8->nama = "tidak hadir";
        $status8->deskripsi = "tamu telah dikonfirmasi hadir di undangan";
        $status8->save();
    }
}
