<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roundings', function (Blueprint $table) {
            $table->id();
            $table->string('round_type');
            $table->bigInteger('up_checkin');
            $table->bigInteger('up_checkout');
            $table->bigInteger('down_checkin');
            $table->bigInteger('down_checkout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roundings');
    }
}
