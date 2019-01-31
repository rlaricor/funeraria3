<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned();
            $table->integer('proof_payment_type_id')->unsigned()->nullable();
            $table->integer('number_proof');
            $table->float('amount',6,2);
            $table->longtext('observation');
            $table->integer('user_id');
            $table->softDeletes();
            $table->timestamps();

            //relations
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('proof_payment_type_id')->references('id')->on('proof_payment_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
