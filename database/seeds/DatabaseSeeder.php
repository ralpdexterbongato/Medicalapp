<?php

use Illuminate\Database\Seeder;
use App\User;
use App\situationNational;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $forDefaults = array(array('id_sn' =>'0' ,'libelle'=>'Accompli'),array('id' =>'1' ,'libelle'=>'Dispensè'),array('id' =>'1' ,'libelle'=>'inapte'));
    	 situationNational::insert($forDefaults);
    	
    }
}
