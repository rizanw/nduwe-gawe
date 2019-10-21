<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('undangan_id')->unsigned();
            $table->integer('total_bayar');
            $table->string('bukti_bayar');
            $table->string('status', 50);
            $table->timestamps();

            $table->foreign('undangan_id')->references('id')
                ->on('undangans')->onDelete('cascade');
//            $table->foreign('user_id')->references('id')
//                ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
}
