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
            $table->date('dateVisite');
            $table->string('typeVisite');
            $table->integer('poids');
            $table->integer('taille');
            $table->integer('albumine');
            $table->integer('sucre');
            $table->integer('hématies');
            $table->integer('ph');
            $table->string('corpsCétoniques');
            $table->integer('oeilDroit');
            $table->integer('oeilGauche');
            $table->integer('dePrés');
            $table->integer('deLoin');
            $table->integer('coleurs');
            $table->integer('droitCOrrection');
            $table->integer('gaucheCorrection');
            $table->integer('oreillleDroit');
            $table->integer('oreillleGauche');
            $table->timestamps();
            $table->unsignedInteger('nEmployé');
            $table->unsignedInteger('id_med');

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
