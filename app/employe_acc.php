<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe_acc extends Model
{
	protected $primaryKey="id_acc";
    public function employe() {
      return $this->belogstoMany(employe::class,'employes')->withPivot('nEmployé','nom','prénom');;
    }

    public function accidentsTravail() {
      return $this->belogstoMany(accidentsTravail::class,'accidents_travails')->withPivot('lieuAcc');
    }


}
