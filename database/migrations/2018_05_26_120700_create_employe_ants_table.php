<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeAntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_ants', function (Blueprint $table) {

          $table->unsignedInteger('id_ante');

          $table->unsignedInteger('nEmployé');


          $table->date('date_anti');


            $table->timestamps();
        });

        Schema::table('employe_ants' , function(Blueprint $table)
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
        Schema::dropIfExists('employe_ants');
    }
}
