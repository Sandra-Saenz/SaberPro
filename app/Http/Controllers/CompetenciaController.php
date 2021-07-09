<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competencia;

class CompetenciaController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $competencia = Competencia::nombre($request->get('nombre'))->simplePaginate(15);
      return view('competencia.index', compact('competencia'));
    }

    public function create()
    {
        return view('competencia.create', [
         'competencia' => new Competencia
        ]);
    }

    public function store(Competencia $competencia)
    {
        $competencia = request()->validate([
           'nombre'=>'required',
         ]);
        Competencia::create( $competencia );
        return redirect()->route('competencia.index')->with('status', 'La competencia fue creada con exito');
    }

    public function show(Competencia $competencia)
    {
        $competencia = Competencia::find($competencia->id);
        return view( 'competencia.show',compact('competencia'));
    }

    public function edit(Competencia $competencia)
    {
        return view( 'competencia.edit', [
         'competencia' => $competencia
        ]);
    }

    public function update(Competencia $competencia)
    {
       $competencia->update([
         'nombre' => request('nombre'),
       ]);
       return redirect()->route('competencia.index')->with('status', 'La competencia fue actualizada con exito');
    }

}
