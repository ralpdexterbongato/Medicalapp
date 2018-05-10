<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{

  protected $fillable = ['nom','prénom','sexe','dateN','lieuN','adresse','RH','NSS','qualifPro','id_sn','id_sf','id_gr','id_poste'];
  protected $primaryKey = 'nEmployé';

  public function visite() {
    return $this->hasMany(visite::class);
  }

  public function poste() {
    return $this->belongsto(poste::class);
  }

  public function situationFamiliale() {
    return $this->belongsto(situationFamiliale::class);
  }

  public function situationNational() {
    return $this->belongsto(situationNational::class);
  }

  public function groupage() {
    return $this->belongsto(groupage::class);
  }


}
