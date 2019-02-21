<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clinic_id');
            $table->string('full_name');
            $table->string('mobile_number');
            $table->string('email');
            $table->dateTime('appointment_date');
            $table->integer('approved');
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
        Schema::dropIfExists('request_clinics');
    }
}
