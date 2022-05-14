<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShemrockZktecoDeviceConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shemrock_zkteco_device_configs', function (Blueprint $table) {
            $table->id();
            $table->string('device_name');
            $table->unsignedInteger('machine_no');
            $table->string('comm_type', 100);
            $table->string('ip_address', 50);
            $table->unsignedInteger('port');
            $table->string('device_type', 20);
            $table->unsignedInteger('status');
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
        Schema::dropIfExists('shemrock_zkteco_device_configs');
    }
}
