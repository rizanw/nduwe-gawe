<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangans', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->bigInteger('pembayaran_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('paket_id')->unsigned();
            $table->string('nama_acara', 100);
            $table->string('tuan_rumah', 100);
            $table->string('desain_undangan', 255)->nullable();
            $table->integer('jumlah_undangan_kosong');
            $table->timestamps();

//            $table->foreign('pembayaran_id')->references('id')
//                ->on('pembayarans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');
            $table->foreign('paket_id')->references('id')
                ->on('pakets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undangans');
    }
}
