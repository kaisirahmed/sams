<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id')->index();
            $table->unsignedBigInteger('account_no')->index();
            $table->string('name')->index();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('nationality')->index();
            $table->unsignedBigInteger('office_tel')->nullable();
            $table->binary('photo')->nullable();
            $table->string('title')->nullable();
            $table->date('dob');
            $table->date('employment_date')->index();
            $table->unsignedBigInteger('card_number')->index();
            $table->unsignedBigInteger('mobile_number')->index();
            $table->text('address')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information');
    }
}
