<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('recordId');
            $table->string('bookId');
             $table->integer('userId');
            $table->integer('authorId');
             //$table->integer('genreId');
            $table->string('title');
            $table->integer('isbn');
            $table->binary('description');
            $table->string('preview');
            $table->string('cover');
            $table->string('book_status');
            $table->timestamps();
        });
        //DB::statement('ALTER TABLE books AUTO_INCREMENT = 2000');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
