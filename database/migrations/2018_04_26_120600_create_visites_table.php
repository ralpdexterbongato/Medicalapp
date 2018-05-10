<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visites', function (Blueprint $table) {
            $table->increments('id_v')->unsigned()->unique();
            $table->date('dateVisite')->nullable();
            $table->string('typeVisite')->nullable();
            $table->integer('poids')->nullable();
            $table->integer('taille')->nullable();
            $table->integer('albumine')->nullable();
            $table->integer('sucre')->nullable();
            $table->integer('hématies')->nullable();
            $table->integer('ph')->nullable();
            $table->string('corpsCétoniques')->nullable();
            $table->integer('oeilDroit')->nullable();
            $table->integer('oeilGauche')->nullable();
            $table->integer('dePrés')->nullable();
            $table->integer('deLoin')->nullable();
            $table->integer('coleurs')->nullable();
            $table->integer('droitCOrrection')->nullable();
            $table->integer('gaucheCorrection')->nullable();
            $table->integer('oreillleDroit')->nullable();
            $table->integer('oreillleGauche')->nullable();
            $table->timestamps();
            $table->unsignedInteger('nEmployé')->nullable();;
            $table->unsignedInteger('id_med')->nullable();;

            $table->foreign('nEmployé')->references('nEmployé')->on('employes')->onDelete('cascade');
            $table->foreign('id_med')->references('id')->on('users')->onDelete('cascade');

                });











    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visites');
    }
}
