<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maladie extends Model
{
	protected $primaryKey="id_mal";
  public function type() {
    return $this->belongsto(type::class);
  }
}
