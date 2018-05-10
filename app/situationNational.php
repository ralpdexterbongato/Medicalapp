<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class situationNational extends Model
{
  public function employe() {
    return $this->hasMany(employe::class);
  }
}
