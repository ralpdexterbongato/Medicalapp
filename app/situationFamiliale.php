<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class situationFamiliale extends Model
{
  public function employe() {
    return $this->hasMany(employe::class);
  }
}
