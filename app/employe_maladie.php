<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe_maladie extends Model
{
  public function employe() {
    return $this->belogstoMany(employe::class);
  }

  public function maladie() {
    return $this->belogstoMany(maladie::class);
  }

}
