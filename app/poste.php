<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poste extends Model
{
	protected $primaryKey="id_poste";
  public function employe() {
    return $this->hasMany(employe::class);
  }
}
