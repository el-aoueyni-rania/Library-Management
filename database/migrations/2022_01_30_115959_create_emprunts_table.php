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
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('book_id')->unsigned();
            $table->string('firstnameU')->nullable();
            $table->string('lastnameU')->nullable();
            $table->string('emailU')->nullable();
            $table->string('titleB', 1000);
            $table->date('Date_Emprunt');
            $table->date('Date_retour');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('no action')->onUpdate('no action');

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
