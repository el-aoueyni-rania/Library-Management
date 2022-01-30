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
            $table->integer('user_idC')->unsigned();
            $table->string('firstnameUC')->nullable();
            $table->string('lastnameUC')->nullable();
            $table->string('emailUC')->nullable();
            $table->string('titleBC', 1000);
            $table->date('Date_EmpruntC');
            $table->date('Date_retourC');
            $table->timestamps();
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
