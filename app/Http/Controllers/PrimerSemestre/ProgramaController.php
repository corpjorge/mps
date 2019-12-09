<?php

namespace App\Http\Controllers\PrimerSemestre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\PrimerSemestre\PrimSemPrograma;
use App\Model\PrimerSemestre\PrimSemGrupo;
use App\Model\PrimerSemestre\PrimSemGrupoMateria;
use App\Model\PrimerSemestre\PrimSemMateria;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $programas = PrimSemPrograma::paginate(15);
      return view('primerSemestre/admin/index',['programas' => $programas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('primerSemestre/admin/create');
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
        'nombre' => 'required',
        'codigo' => 'required',
        'creditos' => 'required|numeric',
      ]);

      $programa = new PrimSemPrograma;
      $programa->nombre = $request->nombre;
      $programa->codigo = $request->codigo;
      $programa->creditos = $request->creditos;
      $programa->web = $request->web;
      $programa->coordinador = $request->coordinador;
      $programa->correo = $request->correo;
      $programa->telefono = $request->telefono;
      $programa->nota = $request->nota;
      $programa->descripcion = $request->descripcion;
      $programa->recordatorio = $request->recordatorio;
      $programa->opcionales = $request->opcionales;
      $programa->save();

      session()->flash('message', 'Guardado correctamente');
      return redirect('admin/programa/'.$programa->id.'/edit');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $programa = PrimSemPrograma::find($id);
      if ($programa) {
      $grupos = PrimSemPrograma::find($id)->grupos;
      $grupoMaterias = PrimSemGrupoMateria::orderBy('orden', 'ASC')->get();
      $materias = PrimSemMateria::all();

      return view('primerSemestre/admin/edit', compact('programa'), [  'grupos' => $grupos, 'grupoMaterias' => $grupoMaterias, 'materias' => $materias ]);
      }
      return redirect()->route('programa');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'creditos' => 'required'
        ]);

        $programa = PrimSemPrograma::find($id);

        $programa->nombre = $request->nombre;
        $programa->codigo = $request->codigo;
        $programa->descripcion = $request->descripcion;
        $programa->creditos = $request->creditos;
        $programa->web = $request->web;
        $programa->coordinador = $request->coordinador;
        $programa->correo = $request->correo;
        $programa->telefono = $request->telefono;
        $programa->nota = $request->nota;
        $programa->recordatorio = $request->recordatorio;
        $programa->opcionales = $request->opcionales;
        $programa->save();

        session()->flash('message', 'Guardado correctamente');

        return back()->withStatus(__('Programa actualizado correctamente'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $programa = PrimSemPrograma::find($id);
        $programa->estado = $request->estado;
        $programa->save();
        session()->flash('message', 'Guardado correctamente');
        return back()->withStatus(__('Programa actualizado correctamente'));

    }
}
