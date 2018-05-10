<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentsPersosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedents_persos', function (Blueprint $table) {
            $table->increments('id_ante');
            $table->string('libelle');
            $table->string('discription');
            $table->timestamps();
            $table->unsignedInteger('nEmployé');
            $table->foreign('nEmployé')->references('nEmployé')->on('employes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedents_persos');
    }
}
