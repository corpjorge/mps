<?php

namespace App\Exports;

use App\Model\PrimerSemestre\PrimSemGrupoMateria;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProgramasMateriasExport implements FromView
{
    public function view(): View
    {
        return view('primerSemestre.admin.export.ProgramasMaterias', [
            'programasMaterias' => PrimSemGrupoMateria::all()
        ]);
    }
}
