<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpruntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('book_id')->unsigned()->nullable();
            $table->string('emailU')->nullable();
            $table->string('titleB')->nullable();
            $table->date('Date_Emprunt');
            $table->date('Date_retour');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('emailU')->references('email')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('titleB')->references('title')->on('books')->onDelete('set null')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprunts');
    }
}
