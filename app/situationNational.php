<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class situationNational extends Model
{
protected $primaryKey="id_sn";
  public function employe() {
    return $this->hasMany(employe::class);
  }
}
