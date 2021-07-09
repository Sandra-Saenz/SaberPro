<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use App\Models\Competencia;


class AsignaturaController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $asignatura = Asignatura::nombre($request->get('nombre'))->simplePaginate(15);
        return view('asignatura.index', compact('asignatura'));
    }

    public function create()
    {
        $competencia = Competencia::select('id', 'nombre')->orderBy('id')->get();
        return view('asignatura.create', [
         'asignatura' => new Asignatura,
         'competencia' => $competencia
        ]);
    }

    public function store(Asignatura $asignatura)
    {
        $asignatura = request()->validate([
           'nombre'=>'required',
           'competencia_id'=>'required',
         ]);
        Asignatura::create( $asignatura );
        return redirect()->route('asignatura.index')->with('status', 'La asignatura fue creada con exito');
    }

    public function show(Asignatura $asignatura)
    {
        $asignatura = Asignatura::find($asignatura->id);
        return view( 'asignatura.show',compact('asignatura'));
    }

    public function edit(Asignatura $asignatura)
    {
        $competencia = Competencia::select('id', 'nombre')->orderBy('id')->get();
        return view( 'asignatura.edit', [
         'asignatura' => $asignatura,
         'competencia' => $competencia
        ]);
    }

    public function update(Asignatura $asignatura)
    {
        $asignatura->update([
          'nombre' => request('nombre'),
          'competencia_id' => request('competencia_id'),
        ]);
        return redirect()->route('asignatura.index')->with('status', 'La asignatura fue actualizada con exito');
    }

}
