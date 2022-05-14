<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShemrockZktecoAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shemrock_zkteco_attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_no')->index();
            $table->dateTime('access_time')->index();
            $table->unsignedBigInteger('in_out');
            $table->unsignedBigInteger('device_no');
            $table->timestamps();
            $table->unique(['id','account_no']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shemrock_zkteco_attendances');
    }
}
