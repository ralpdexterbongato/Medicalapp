<?php

use Illuminate\Database\Seeder;
use App\User;
use App\situationNational;
use App\situationFamiliale;
use App\groupage;
use App\poste;
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

        $forDefaults = array(array('id_sn' =>'0' ,'libelle'=>'Accompli'),array('id' =>'1' ,'libelle'=>'Dispensè'),array('id' =>'2' ,'libelle'=>'inapte'));
        $forfamiDefaults = array(array('id_sf' =>'0','libelle'=>'célibataire'),array('id_sf' =>'1','libelle'=>'marié'),array('id_sf' =>'2','libelle'=>'divorcé'));
        $forGRDefaults = array(array('id_gr' =>'0','libelle'=>'A+'),array('id_gr' =>'1','libelle'=>'A-'),array('id_gr' =>'2','libelle'=>'B+'),array('id_gr' =>'3','libelle'=>'B-'),array('id_gr' =>'4','libelle'=>'AB+'),array('id_gr' =>'5','libelle'=>'AB-'),array('id_gr' =>'6','libelle'=>'O+'),array('id_gr' =>'7','libelle'=>'O-'));
    	$forPostesDefaults = array(array('id_poste' =>'0','organisme'=>'DCR','atelier'=>'Forge'),array('id_poste' =>'1','organisme'=>'DVI','atelier'=>'Tôlerie et Emboutissage'),array('id_poste' =>'2','organisme'=>'DVI','atelier'=>'DVI Montage Camions'),array('id_poste' =>'3','organisme'=>'DVI','atelier'=>'DVI Montage Autocars et Autobus'));
        poste::insert($forPostesDefaults);
        situationFamiliale::insert($forfamiDefaults);
        groupage::insert($forGRDefaults);
        situationNational::insert($forDefaults);
    }
}
