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
            $table->bigInteger('emp_idc')->unsigned();
            $table->integer('user_idR');
            $table->string('firstnameR')->nullable();
            $table->string('lastnameR')->nullable();
            $table->string('emailR')->nullable();
            $table->string('titleR', 1000);
            $table->date('Date_EmpruntR');
            $table->date('Date_retourR');
            $table->timestamps();
            $table->foreign('emp_idc')->references('id')->on('emprunt_confirmers')->onDelete('no action')->onUpdate('no action');

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
