<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_data', function (Blueprint $table) {
            $table->bigIncrements('userId');
//            $table->integer('userId');
            // $table->string('user_firstName');
            // $table->string('user_lastName');
            $table->string('user_street');
            $table->string('user_apt');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('phone');
            $table->timestamps();
            //$table->foreign('userId')->references('userId')->on('books');
        });
        //DB::statement('ALTER TABLE users_data AUTO_INCREMENT = 4000');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_data');
    }
}
