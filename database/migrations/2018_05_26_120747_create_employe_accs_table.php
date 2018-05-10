<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeAccsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_accs', function (Blueprint $table) {
          $table->unsignedInteger('nEmployé');


          $table->unsignedInteger('id_acc');


          $table->date('dateAcc');
            $table->timestamps();
        });

        Schema::table('employe_accs' , function(Blueprint $table)
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
        Schema::dropIfExists('employe_accs');
    }
}
