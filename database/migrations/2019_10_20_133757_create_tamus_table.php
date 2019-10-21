<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('undangan_id')->unsigned();
            $table->string('nama', 100);
            $table->string('alamat', 200);
            $table->string('no_hp', 15);
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
        Schema::dropIfExists('tamus');
    }
}
