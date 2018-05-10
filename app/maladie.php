<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maladie extends Model
{
  public function type() {
    return $this->belongsto(type::class);
  }
}
