<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrientationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orientations', function (Blueprint $table) {

            $table->increments('id_ori')->unique();
            $table->string('spécialité');
            $table->string('serviceSocial');
            $table->string('serviceEmploi');
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
        Schema::dropIfExists('orientations');
    }
}
