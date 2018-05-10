<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe_ant extends Model
{
  public function employe() {
    return $this->belogstoMany(employe::class);
  }
  public function anttecedentsPerso() {
    return $this->belogstoMany(anttecedentsPerso::class);
  }

}
