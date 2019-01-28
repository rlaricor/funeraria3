<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_type_id')->unsigned();
            $table->enum('person_condition',['Natural','Juridica'])->default('Natural');
            $table->string('document_id','20');
            $table->date('birthday')->nullable();
            $table->string('name','100');
            $table->string('last_name','50');
            $table->integer('user_id');
            $table->softDeletes();
            $table->timestamps();

            //relations
            $table->foreign('person_type_id')->references('id')->on('person_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
