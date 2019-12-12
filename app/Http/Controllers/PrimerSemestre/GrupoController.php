<?php

namespace App\Http\Controllers\PrimerSemestre;

use App\Model\PrimerSemestre\PrimSemGrupo;
use App\Model\PrimerSemestre\PrimSemGrupoMateria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrupoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->Validate($request,[
          'grupo_materia' => 'required|',
          'id_programa' => 'required|',
      ]);

      $grupo = new PrimSemGrupo;
      $grupo->nombre  = $request->grupo_materia;
      $grupo->prim_sem_programa_id  = $request->id_programa;
      $grupo->save();

      session()->flash('message', 'Guardado correctamente');
      return redirect('admin/programa/'.$request->id_programa.'/edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PrimerSemestre\PrimSemGrupo  $primSemGrupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->Validate($request,[
          'editar_grupo_materia' => 'required|'
      ]);

      $grupo = PrimSemGrupo::find($id);
      $grupo->nombre = $request->editar_grupo_materia;
      $grupo->save();

      session()->flash('message', 'Guardado correctamente');
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\PrimerSemestre\PrimSemGrupo  $primSemGrupo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      PrimSemGrupoMateria::where('prim_sem_grupo_id',$id)->delete();
      PrimSemGrupo::destroy($id);
      session()->flash('message', 'Guardado correctamente');
      return back();
    }
}
