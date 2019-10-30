<?php

namespace App\Http\Controllers\PrimerSemestre;

use App\Model\PrimerSemestre\PrimSemMateria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriaController extends Controller
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
     * Buscar materia por codigo.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscarEditar(Request $request)
    {
      $data = PrimSemMateria::where('codigocompleto',$request->codigo)->first();
      return redirect('admin/materia/'.$data->id.'/edit');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $materias = PrimSemMateria::orderBy('codigocompleto', 'ASC')->paginate(15);
      return view('primerSemestre/admin/materia/index',['materias' => $materias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('primerSemestre/admin/materia/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->cbu){
          $this->Validate($request,[
            'nombre' => 'required',
            'cbu' => 'required',
          ]);
        }else{
          $this->Validate($request,[
            'nombre' => 'required',
            'codigo' => 'required',
            'numero' => 'required',
            'periodo' => 'required|numeric',
            'creditos' => 'required|numeric',
          ]);
        }

        $codigo = strtoupper($request->codigo);
        $codigocompleto = $codigo.$request->numero;

        $materia = new PrimSemMateria;
        $materia->nombre = $request->nombre;
        if($request->cbu){
          $materia->codigo  = 'CBU';
        }else{
          $materia->codigo  = $codigo;
        }
        $materia->numero  = $request->numero;
        $materia->codigocompleto  = $codigocompleto;
        $materia->programa  = $request->programa;
        $materia->periodo  = $request->periodo;
        $materia->creditos  = $request->creditos;
        $materia->save();

        session()->flash('message', 'Guardado correctamente');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\PrimerSemestre\PrimSemMateria  $primSemMateria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = PrimSemMateria::find($id);
      return view('primerSemestre/admin/materia/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PrimerSemestre\PrimSemMateria  $primSemMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->Validate($request,[
          'nombre' => 'required',
          'codigo' => 'required',
          'numero' => 'required|numeric',
          'periodo' => 'required|numeric',
          'creditos' => 'required|numeric',
      ]);

      $codigo = strtoupper($request->codigo);
      $codigocompleto = $codigo.$request->numero;

      $materia = PrimSemMateria::find($id);
      $materia->nombre = $request->nombre;
      $materia->codigo  = $codigo;
      $materia->numero  = $request->numero;
      $materia->codigocompleto  = $codigocompleto;
      $materia->programa  = $request->programa;
      $materia->periodo  = $request->periodo;
      $materia->creditos  = $request->creditos;
      $materia->save();

      session()->flash('message', 'Guardado correctamente');
      return back();
    }

}
