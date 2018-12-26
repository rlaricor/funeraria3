<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceTypeServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_type_service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('insurance_type_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->timestamps();

            //relations
            $table->foreign('insurance_type_id')->references('id')->on('insurance_types');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_type_service');
    }
}
