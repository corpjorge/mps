<?php

namespace App\Http\Controllers\PrimerSemestre;

use App\Model\PrimerSemestre\PrimSemGrupoMateria;
//PrimSemGrupo eliminar esta linea
use App\Model\PrimerSemestre\PrimSemGrupo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrupoMateriaController extends Controller
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
          'id_materia' => 'required',
          'id_grupo' => 'required'
      ]);

      $orden = PrimSemGrupoMateria::where('prim_sem_grupo_id',$request->id_grupo)->orderBy('orden', 'DESC')->limit(1)->first();

      $grupo = new PrimSemGrupoMateria;
      $grupo->prim_sem_grupo_id = $request->id_grupo;
      $grupo->prim_sem_materia_id  = $request->id_materia;
      $grupo->descripcion  = $request->descripcion;
      if ($orden) {
        $grupo->orden = $orden->orden+1;
      }
      else{
        $grupo->orden = 1;
      }
      $grupo->save();
      session()->flash('message', 'Guardado correctamente');
      return back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PrimerSemestre\PrimSemGrupoMateria  $primSemGrupoMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = PrimSemGrupoMateria::find($id);
      $data->prim_sem_materia_id  = $request->id_materiaEditar;
      $data->descripcion  = $request->descripcion;
      $data->save();

      session()->flash('message', 'Guardado correctamente');
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\PrimerSemestre\PrimSemGrupoMateria  $primSemGrupoMateria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = PrimSemGrupoMateria::find($id);
      $data->delete();
      session()->flash('message', 'Guardado correctamente');
      return back();

    }

    public function up($id)
    {
      $materia = PrimSemGrupoMateria::find($id);

      if ($materia->orden == 0) {
        return back();
      }

      $orden = $materia->orden-1;
      $materiaAnterior = PrimSemGrupoMateria::where('prim_sem_grupo_id',$materia->prim_sem_grupo_id)
                                            ->where('orden',$orden)
                                            ->first();

      //materia a bajar
      $materiaAnterior->orden = $materia->orden;
      //materia a subir
      $materia->orden = $orden;
      //Guardar Orden
      $materia->save();
      $materiaAnterior->save();

      return back();
    }

    public function down($id)
    {
      $materia = PrimSemGrupoMateria::find($id);
      $limite = PrimSemGrupoMateria::where('prim_sem_grupo_id',$materia->prim_sem_grupo_id)->orderBy('orden', 'DESC')->limit(1)->first();

      if ($limite->orden == $materia->orden) {
        return back();
      }

      $orden = $materia->orden+1;

      $materiaAnterior = PrimSemGrupoMateria::where('prim_sem_grupo_id',$materia->prim_sem_grupo_id)
                                            ->where('orden',$orden)
                                            ->first();

      //materia a Subir
      $materiaAnterior->orden = $materia->orden;
      //materia a Bajar
      $materia->orden = $orden;
      //Guardar orden
      $materia->save();
      $materiaAnterior->save();

      return back();
    }

    //Funcion termporal debe ser eliminada
    public function full()
    {
      $grupos = PrimSemGrupo::all();
      foreach ($grupos as $grupo) {
        $grupoMaterias = PrimSemGrupoMateria::where('prim_sem_grupo_id',$grupo->id)->get();
        foreach ($grupoMaterias as $key => $grupoMateria) {
          $materia = PrimSemGrupoMateria::find($grupoMateria->id);
          $materia->orden = $key;
          $materia->save();
        }
      }
    }


}
