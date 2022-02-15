<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('book_id');
            $table->string('title', 1000);
            $table->string('author', 1000);
            $table->text('description');
            $table->string('photo');
            $table->bigInteger('category_id')->unsigned();
            $table->string('fichierpdf');
            $table->integer('total');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('book_categories')->onDelete('no action')->onUpdate('no action');

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