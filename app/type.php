<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
  public function maladie() {
    return $this->hasMany(maladie::class);
  }
}
