<?php

namespace App\Model\PrimerSemestre;

use Illuminate\Database\Eloquent\Model;

class PrimSemPrograma extends Model
{
  /**
   * Obtener los grupos de materias
   */
  public function grupos()
  {
      return $this->hasMany('App\Model\PrimerSemestre\PrimSemGrupo');
  }
}
