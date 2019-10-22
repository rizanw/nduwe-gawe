<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndanganPernikahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangan__pernikahans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('undangan_id')->unsigned();
            $table->string('Nama_Pria', 100);
            $table->string('Ibu_Pria', 100);
            $table->string('Bapak_Pria', 100);
            $table->string('Nama_Wanita', 100);
            $table->string('Ibu_Wanita', 100);
            $table->string('Bapak_Wanita', 100);
            $table->date('tanggal_akad');
            $table->time('jam_mulai_akad');
            $table->time('jam_selesai_akad');
            $table->string('tempat_akad');
            $table->date('tanggal_resepsi');
            $table->time('jam_mulai_resepsi');
            $table->time('jam_selesai_resepsi');
            $table->string('tempat_resepsi');
            $table->timestamps();

            $table->foreign('undangan_id')->references('id')
                ->on('undangans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undangan__pernikahans');
    }
}
