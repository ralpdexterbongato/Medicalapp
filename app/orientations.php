<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orientations extends Model
{
	protected $primaryKey="id_ori";
	
  public function visite() {
    return $this->hasMany(visite::class);
  }
}
