<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
	protected $primaryKey="id_type";
  public function maladie() {
    return $this->hasMany(maladie::class);
  }
}
