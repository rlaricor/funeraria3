<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['Proforma', 'Servicio'])->default('Servicio');
            $table->integer('contract_number')->nullable();
            $table->date('contract_date')->nullable();
            $table->date('death_date')->nullable();
            $table->integer('place_registration_id')->unsigned();
            $table->string('registration_observation','100')->nullable();
            $table->float('total_amount',6,2)->nullable();
            $table->string('insurance_charged', 100)->nullable();
            $table->integer('user_id');
            $table->softDeletes();
            $table->timestamps();

            //relations
            $table->foreign('place_registration_id')->references('id')->on('place_registrations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
