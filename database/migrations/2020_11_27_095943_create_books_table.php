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
            $table->string('title', 255)->unique();
            $table->string('author', 255);
            $table->text('description');
            $table->string('photo');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('fichierpdf');
            $table->integer('total');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('book_categories')->onDelete('set null')->onUpdate('cascade');

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
