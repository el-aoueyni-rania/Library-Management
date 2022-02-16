<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpruntConfirmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunt_confirmers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_idC')->unsigned()->nullable();
            $table->bigInteger('book_idC')->unsigned()->nullable();
            $table->string('emailC')->nullable();
            $table->string('titleC')->nullable();
            $table->date('Date_EmpruntC');
            $table->date('Date_retourC');
            $table->timestamps();
            $table->foreign('user_idC')->references('id')->on('users')->onDelete('set null')->onUpdate('set null');
            $table->foreign('book_idC')->references('book_id')->on('books')->onDelete('set null')->onUpdate('set null');
            $table->foreign('emailC')->references('email')->on('users')->onDelete('set null')->onUpdate('set null');
            $table->foreign('titleC')->references('title')->on('books')->onDelete('set null')->onUpdate('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprunt_confirmers');
    }
}
