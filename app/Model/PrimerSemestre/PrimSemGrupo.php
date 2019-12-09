<?php

namespace App\Model\PrimerSemestre;

use Illuminate\Database\Eloquent\Model;

class PrimSemGrupo extends Model
{
    /**
     * las materias a que programa pertenecen
     */
    public function programa()
    {
        return $this->belongsTo('App\Model\PrimerSemestre\PrimSemPrograma', 'prim_sem_programa_id');
    }
}
