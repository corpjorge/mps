<?php

namespace App\Http\Controllers\PrimerSemestre;

use App\Model\PrimerSemestre\PrimSemMateriaRequisito;
use App\Model\PrimerSemestre\PrimSemMateria;
use App\Model\PrimerSemestre\PrimSemRequisito;
use App\Model\PrimerSemestre\PrimSemGrupo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriRequisitoController extends Controller
{
    /**
     * Buscar materia por codigo.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar($palabra)
    {
      $data = PrimSemMateria::where('codigocompleto','like','%'.$palabra.'%')->get();
      return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->Validate($request,[
            'id_materia' => 'required|',
            'id_programa' => 'required|',
        ]);

        $grupo = new PrimSemGrupo;
        $grupo->nombre  = $request->nombre_materia;
        $grupo->prim_sem_programa_id  = $request->id_programa;
        $grupo->save();

        $requisito = new PrimSemRequisito;
        if ($request->descripcion == '') {
          $requisito->descripcion  = 1;
        }else{
          $requisito->descripcion  = $request->descripcion;
        }
        $requisito->prim_sem_grupo_id  = $grupo->id;
        $requisito->save();

        foreach ($request->id_materia as $materia_id) {
           $materia = new PrimSemMateriaRequisito;
           $materia->prim_sem_materia_id  = $materia_id;
           $materia->prim_sem_requisito_id= $requisito->id;
           $materia->save();
        }

        session()->flash('message', 'Guardado correctamente');
        return redirect('admin/programa/'.$request->id_programa.'/edit');
    }

    /**
     * Añador Materias a Descripcion.
     *
     * @param  \App\Model\PrimerSemestre\PrimSemMateriaRequisito  $primSemMateriaRequisito
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
      $this->Validate($request,[
          'id_materia' => 'required|',
      ]);

      foreach ($request->id_materia as $materia_id) {
         $materia = new PrimSemMateriaRequisito;
         $materia->prim_sem_materia_id  = $materia_id;
         $materia->prim_sem_requisito_id= $id;
         $materia->save();
      }

      session()->flash('message', 'Guardado correctamente');
      return back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PrimerSemestre\PrimSemMateriaRequisito  $primSemMateriaRequisito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->Validate($request,[
          'id_materia' => 'required|',
      ]);

      $requisito = new PrimSemRequisito;
      if ($request->descripcion == '') {
          $requisito->descripcion  = 1;
      }else{
        $requisito->descripcion  = $request->descripcion;
      }
      $requisito->prim_sem_grupo_id  = $id;
      $requisito->save();

      foreach ($request->id_materia as $materia_id) {
         $materia = new PrimSemMateriaRequisito;
         $materia->prim_sem_materia_id  = $materia_id;
         $materia->prim_sem_requisito_id= $requisito->id;
         $materia->save();
      }

      session()->flash('message', 'Guardado correctamente');
      return back();
    }


    /**
     * Update Actualizar la descripcion.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PrimerSemestre\PrimSemRequisito  $primSemRequisito
     * @return \Illuminate\Http\Response
     */
    public function updateDescripcion(Request $request, $id)
    {
      $requisito = PrimSemRequisito::find($id);
      if ($request->descripcion == '') {
          $requisito->descripcion  = 1;
      }else{
        $requisito->descripcion  = $request->descripcion;
      }
      $requisito->save();

      session()->flash('message', 'Guardado correctamente');
      return back();
    }

    /**
     * Update Actualizar la descripcion.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PrimerSemestre\PrimSemGrupo  $primSemGrupo
     * @return \Illuminate\Http\Response
     */
    public function updateGrupo(Request $request, $id)
    {
      $grupo = PrimSemGrupo::find($id);
      $grupo->nombre = $request->nombre_grupo;
      $grupo->save();

      session()->flash('message', 'Guardado correctamente');
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\PrimerSemestre\PrimSemMateriaRequisito  $primSemMateriaRequisito
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      PrimSemMateriaRequisito::destroy($id);
      session()->flash('message', 'Guardado correctamente');
      return back();
    }

    /**
     * Eliminar descripcion y materias.
     *
     * @param  \App\Model\PrimerSemestre\PrimSemRequisito  $primSemRequisito
     * @return \Illuminate\Http\Response
     */
    public function destroyDesc($id)
    {
      PrimSemMateriaRequisito::where('prim_sem_requisito_id',$id)->delete();
      PrimSemRequisito::destroy($id);

      session()->flash('message', 'Guardado correctamente');
      return back();
    }

    /**
     * Eliminar descripcion y materias.
     *
     * @param  \App\Model\PrimerSemestre\PrimSemGrupo  $primSemRequisito
     * @return \Illuminate\Http\Response
     */
    public function destroyGrupo($id)
    {
      $requisitos = PrimSemRequisito::where('prim_sem_grupo_id',$id)->get();
      foreach ($requisitos as $requisito) {
        PrimSemMateriaRequisito::where('prim_sem_requisito_id',$requisito->id)->delete();
      }
      PrimSemRequisito::where('prim_sem_grupo_id',$id)->delete();
      PrimSemGrupo::destroy($id);

      session()->flash('message', 'Guardado correctamente');
      return back();
    }

}
