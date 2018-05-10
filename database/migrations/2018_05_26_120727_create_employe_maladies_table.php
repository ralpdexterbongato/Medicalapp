<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeMaladiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_maladies', function (Blueprint $table) {
          $table->unsignedInteger('nEmployé');


          $table->unsignedInteger('id_mal');


          $table->date('dateMaladie');

            $table->timestamps();
        });

        Schema::table('employe_maladies' , function(Blueprint $table)
       {
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employe_maladies');
    }
}
