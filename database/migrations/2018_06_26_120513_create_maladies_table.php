<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaladiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maladies', function (Blueprint $table) {
            $table->increments('id_mal')->unsigned()->unique();
            $table->string('libelle');
            $table->timestamps();
            $table->unsignedInteger('nEmployé');
            $table->unsignedInteger('id_type');
            $table->foreign('id_type')->references('id_type')->on('types')->onDelete('cascade');
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
        Schema::dropIfExists('maladies');
    }
}
