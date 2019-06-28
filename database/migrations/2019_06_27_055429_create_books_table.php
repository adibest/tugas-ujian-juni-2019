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
            $table->Increments('id');
            $table->string('ISBN');
            $table->string('title');
            $table->unsignedInteger('type_book_id');
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('publisher_id');
            $table->integer('amount_total');
            $table->integer('amount_out');
            $table->integer('amount_remain');
            $table->timestamps();

            $table->foreign('type_book_id')->references('id')->on('type_members')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on('authors')->onDelete('cascade');
        });
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
