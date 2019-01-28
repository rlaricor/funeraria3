<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_profile_id')->unsigned();
            $table->string('username',60)->unique();
            $table->string('name','60');
            $table->string('lastname','80');
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('document_id', 11);
            $table->date('birthday')->nullable();
            $table->string('email',128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('condition',['Enable','Disable','Deleted']);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            //relations
            $table->foreign('user_profile_id')->references('id')->on('user_profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
