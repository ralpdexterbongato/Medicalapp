<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class situationFamiliale extends Model
{
	protected $primaryKey="id_sf";
  public function employe() {
    return $this->hasMany(employe::class);
  }
}
