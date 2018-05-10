<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aptitudeAuTravail extends Model
{
	protected $primaryKey = "id_app";
	
  public function visite() {
    return $this->hasMany(visite::class);
  }
}
