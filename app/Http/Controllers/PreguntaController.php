<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Pregunta,Respuesta,Asignatura,Tema,Documentacion};
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\savePreguntaRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PreguntaImport;

class PreguntaController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $pregunta = Pregunta::asignatura($request->get('asignatura'))->simplePaginate(15);
      $asignatura = Asignatura::select('id', 'nombre')->orderBy('id')->get();
      return view('pregunta.index', [
        'pregunta' => $pregunta,
        'asignatura' => $asignatura
      ]);
    }

    public function create()
    {
      $asignatura = Asignatura::select('id', 'nombre')->orderBy('id')->get();
      $tema = Tema::select('id', 'nombre', 'pregunta_id')->orderBy('id')->get();

      return view('pregunta.create', [
       'pregunta' => new Pregunta,
       'asignatura' => $asignatura,
       'tema' => $tema,
       'respuesta' => new Respuesta,
       'Documentacion' => new Documentacion
      ]);
    }

    public function store(savePreguntaRequest $request)
    {
          $pregunta = Pregunta::create($request->validated());

          if ($request->file('imagen_enunciado')) {
              $pregunta->imagen_enunciado = $request->file('imagen_enunciado')->store('preguntas', 'public');
              $pregunta->save();
          }

          $pregunta_id = Pregunta::select('id')->latest('id')->first();
          $respuesta = request()->validate([
            'respuesta_A'=>'required',
            'respuesta_B'=>'required',
            'respuesta_C'=>'required',
            'respuesta_D'=>'required',
          ]);
          Respuesta::create($respuesta + ['pregunta_id' => $pregunta_id->id] );

      return redirect()->route('pregunta.index')->with('status', 'La pregunta fue creada con exito');
    }

    public function upload()
    {
      return view('pregunta.upload');
    }

    public function importFile(Request $request){
      $this->validate($request, [
      'archivo_preguntas'  => 'required|mimes:xls,xlsx'
      ]);

      $file = $request->file('archivo_preguntas')->store('temp');
      Excel::import(new PreguntaImport, $file);

      return redirect()->route('pregunta.index')->with('status', 'importacion de preguntas fue completada con exito');
    }

    public function show(Pregunta $pregunta)
    {
      $pregunta = Pregunta::find($pregunta->id);
      return view('pregunta.show',compact('pregunta'));
    }

    public function edit(Pregunta $pregunta)
    {
        $asignatura = Asignatura::select('id', 'nombre')->orderBy('id')->get();
        $respuesta = Respuesta::where('pregunta_id', $pregunta->id)->first();
        $tema = Tema::where('pregunta_id', $pregunta->id)->first();

        return view('pregunta.edit', [
         'pregunta' => $pregunta,
         'asignatura' => $asignatura,
         'respuesta' => $respuesta,
         'tema' => $tema
        ]);
    }

    public function update(Pregunta $pregunta, savePreguntaRequest $request)
    {
        $pregunta->update([
          'enunciado' => request('enunciado'),
          'respuesta_correcta' => request('respuesta_correcta'),
          'propietario_pregunta' => request('propietario_pregunta'),
          'asignatura_id' => request('asignatura_id'),
        ]);

        if ($request->file('imagen_enunciado')) {
          Storage::disk('public')->delete($pregunta->imagen_enunciado);
          $pregunta->imagen_enunciado = $request->file('imagen_enunciado')->store('preguntas', 'public');
          $pregunta->save();
        }

        $respuesta = Respuesta::where('pregunta_id', $pregunta->id)->first();
        $respuesta->update([
          'respuesta_A' => request('respuesta_A'),
          'respuesta_B' => request('respuesta_B'),
          'respuesta_C' => request('respuesta_C'),
          'respuesta_D' => request('respuesta_D'),
        ]);

       return redirect()->route('pregunta.index')->with('status', 'La pregunta fue actualizada con exito');
    }
}
