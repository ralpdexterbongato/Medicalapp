<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accidentsTravail extends Model
{

    protected $fillable = ['lieuAcc','consécuences'];
    protected $primaryKey = 'id_acc';
}
