<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre', function (Blueprint $table) {
            $table->BigIncrements('genreId');
            //$table->integer('genre_id');
            $table->string('genre');
            $table->timestamps();
            //$table->foreign('genreId')->references('genreId')->on('books');
        });
        //DB::statement('ALTER TABLE genre AUTO_INCREMENT = 4000');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre');
    }
}
