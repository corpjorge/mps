<?php

namespace App\Model\PrimerSemestre;

use Illuminate\Database\Eloquent\Model;

class PrimSemGrupoMateria extends Model
{
    /**
     * las materias que pertenecen a los requisitos
     */
    public function materias()
    {
        return $this->belongsTo('App\Model\PrimerSemestre\PrimSemMateria', 'prim_sem_materia_id');
    }

}
