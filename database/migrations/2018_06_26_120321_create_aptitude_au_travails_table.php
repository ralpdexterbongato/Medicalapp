<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAptitudeAuTravailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aptitude_au_travails', function (Blueprint $table) {
            $table->increments('id_app')->unsigned()->unique();
            $table->string('aptitude');
            $table->string('postesConseillés');
            $table->string('postesDeconseillés');
            $table->unsignedInteger('id_v');
            $table->foreign('id_v')->references('id_v')->on('visites')->onDelete('cascade');
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
        Schema::dropIfExists('aptitude_au_travails');
    }
}
