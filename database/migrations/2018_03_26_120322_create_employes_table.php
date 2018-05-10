<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->unsignedInteger('nEmployé', 10)->unique();
            $table->string('nom', 100);
            $table->string('prénom', 100);
            $table->string('sexe', 10);
            $table->date('dateN');
            $table->string('lieuN', 255);
            $table->string('adresse', 255);
            $table->string('photo')->nullable();
            $table->string('RH');
            $table->string('NSS', 10);
            $table->string('qualifPro', 255);
            $table->timestamps();
            $table->integer('id_sn')->unsigned();
            $table->unsignedInteger('id_sf');
            $table->unsignedInteger('id_gr');
            $table->unsignedInteger('id_poste');
            

              $table->foreign('id_sn')->references('id_sn')->on('situation_nationals')->onDelete('cascade');
              $table->foreign('id_sf')->references('id_sf')->on('situation_familiales')->onDelete('cascade');
              $table->foreign('id_gr')->references('id_gr')->on('groupages')->onDelete('cascade');



                          });









}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
