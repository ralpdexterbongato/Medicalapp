<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupage extends Model
{
  protected $fillable = ['id_gr','libelle'];
  protected $primaryKey = 'id_gr';

  public function employe() {
    return $this->hasMany(employe::class);
  }
}
