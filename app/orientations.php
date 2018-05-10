<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orientations extends Model
{
  public function visite() {
    return $this->hasMany(visite::class);
  }
}
