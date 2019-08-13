<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('authorId');
            //$table->integer('authorId');
            $table->string('author_firstName');
            $table->string('author_lastName');
            $table->timestamps();
            //$table->foreign('authorId')->references('authorId')->on('books');
        });
        //DB::statement('ALTER TABLE authors AUTO_INCREMENT = 3000');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
