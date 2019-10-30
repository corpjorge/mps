<?php

namespace App\Http\Controllers\PrimerSemestre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\PrimerSemestre\PrimSemMateria;
use App\Model\PrimerSemestre\PrimSemPrograma;
use App\Model\PrimerSemestre\PrimSemGrupo;
use App\Model\PrimerSemestre\PrimSemGrupoMateria;


class PrimerSemestreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $programas = PrimSemPrograma::where('estado',1)->orderBy('nombre', 'ASC')->get();
        return view('primerSemestre/primerSemestre/index', [ 'programas' => $programas]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nombre)
    {
      $programa = PrimSemPrograma::where('nombre',$nombre)->first();
      if ($programa) {
        $grupos = PrimSemGrupo::where('prim_sem_programa_id',$programa->id)->get();
        $materias = PrimSemGrupoMateria::orderBy('orden', 'ASC')->get();
        return view('primerSemestre/primerSemestre/show', compact('programa'), ['grupos' => $grupos, 'materias' => $materias ]);
      }
      return redirect()->route('programa');
    }

}
