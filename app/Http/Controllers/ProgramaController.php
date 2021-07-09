<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Facultad;
use App\Models\Asignatura;
use App\Models\Programa_Asignatura;
use Illuminate\Support\Facades\DB;

class ProgramaController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $programa = Programa::nombre($request->get('nombre'))->simplePaginate(15);
      return view('programa.index', compact('programa'));
    }

    public function create()
    {
      $facultad = Facultad::select('id', 'nombre')->orderBy('id')->get();
      $asignatura = Asignatura::select('id', 'nombre')->orderBy('id')->get();

      return view('programa.create', [
       'programa' => new Programa,
       'facultad' => $facultad,
       'asignatura' => $asignatura
      ]);
    }

    public function store(Programa $programa)
    {
      $programa = request()->validate([
         'nombre'=>'required',
         'facultad_id'=>'required',
       ]);
      Programa::create( $programa );

      if (isset($_POST['asignatura'])) {
         $asignatura_id = $_POST['asignatura'];
         $nombre_programa = $_POST['nombre'];
         $this->saveProgramaAsignatura($nombre_programa, $asignatura_id);
      }

      return redirect()->route('programa.index')->with('status', 'El programa fue creado con exito');
    }

    public function saveProgramaAsignatura($nombre, array $asignatura)
    {
        $prog = DB::table('programa')->where('nombre', $nombre)->first();

        foreach ($asignatura as $idAsig) {
            $progAsig = new Programa_Asignatura;
            $progAsig->Programa_id = $prog->id;
            $progAsig->asignatura_id = $idAsig;
            $progAsig->save();
        }
    }

    public function show(Programa $programa)
    {
      $programa = Programa::find($programa->id);
      return view( 'programa.show',compact('programa'));
    }

    public function edit(Programa $programa)
    {
      $facultad = Facultad::select('id', 'nombre')->orderBy('id')->get();
      $asignatura = Asignatura::select('id', 'nombre')->orderBy('id')->get();

      return view( 'programa.edit', [
       'programa' => $programa,
       'facultad' => $facultad,
       'asignatura' => $asignatura
      ]);
    }

    public function update(Programa $programa)
    {
      $programa->update([
        'nombre' => request('nombre'),
        'facultad_id'=>request('facultad_id'),
      ]);

      $id_asig = $_POST['asignatura'];
      $programa->programaAsignatura()->sync($id_asig);

      return redirect()->route('programa.index')->with('status', 'El programa fue actualizado con exito');
    }
}
