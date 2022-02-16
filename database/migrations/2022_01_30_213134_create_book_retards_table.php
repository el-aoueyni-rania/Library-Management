<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookRetardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_retards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_idR')->unsigned()->nullable();
            $table->bigInteger('book_idR')->unsigned()->nullable();
            $table->string('emailR')->nullable();
            $table->string('titleR')->nullable();
            $table->date('Date_EmpruntR');
            $table->date('Date_retourR');
            $table->timestamps();
            $table->foreign('user_idR')->references('id')->on('users')->onDelete('set null')->onUpdate('set null');
            $table->foreign('book_idR')->references('book_id')->on('books')->onDelete('set null')->onUpdate('set null');
            $table->foreign('emailR')->references('email')->on('users')->onDelete('set null')->onUpdate('set null');
            $table->foreign('titleR')->references('title')->on('books')->onDelete('set null')->onUpdate('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_retards');
    }
}
