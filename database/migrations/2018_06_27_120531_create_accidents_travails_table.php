<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccidentsTravailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidents_travails', function (Blueprint $table) {

            $table->increments('id_acc')->unique();
            $table->string('lieuAcc');
            $table->string('consécuences');
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
        Schema::dropIfExists('accidents_travails');
    }
}
