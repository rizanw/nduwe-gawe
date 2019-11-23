<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTamuStatusToTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tamus', function (Blueprint $table) {
            //
            $table->bigInteger('status_id')->unsigned()->default('1')->nullable();
            $table->foreign('status_id')->references('id')
                ->on('tamu__statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tamus', function (Blueprint $table) {
            //
        });
    }
}
