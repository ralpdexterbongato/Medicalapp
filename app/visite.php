<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visite extends Model
{
    protected $primaryKey = 'id_v';

    public function aptitudeAuTravail() {
      return $this->belongsto(aptitudeAuTravail::class);
    }


    public function orientations() {
      return $this->belongsto(orientations::class);
    }

    public function User() {
      return $this->belongsto(User::class);
    }

    public function employe() {
      return $this->belongsto(employe::class);
    }
}
