<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluacion;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $evaluaciones = Evaluacion::join('users', 'users.id', '=', 'evaluacion.users_id')
       ->where('evaluacion.estado','Realizada')
       ->select('evaluacion.id as id', 'users.name as autor' , 'users.numero_Documento as nAutor', 'evaluacion.descripcion', 'evaluacion.fecha', 'evaluacion.estado', 'evaluacion.Asignatura_eval', 'evaluacion.cant_Preg_Aig', 'evaluacion.tiempoEstipulado')
       ->get();
       //return $evaluaciones;
       return view('Inicio/evaluacionC', compact('evaluaciones'));
    }

    public function consultaIndividualCompleta($id)
    {
       $evaluaciones = Evaluacion::where('users.id' , $id)
       ->join('users', 'users.id', '=', 'evaluacion.users_id')
       ->select('evaluacion.id as id', 'users.name as autor' , 'users.numero_Documento as nAutor', 'evaluacion.descripcion', 'evaluacion.fecha', 'evaluacion.estado', 'evaluacion.Asignatura_eval', 'evaluacion.cant_Preg_Aig', 'evaluacion.tiempoEstipulado')
       ->get();
       //return $evaluaciones;
       return view('Inicio.mysPuebasCompletas', compact('evaluaciones'));
    }


     public function consultaCompleta()
    {
       $evaluaciones = Evaluacion::join('users', 'users.id', '=', 'evaluacion.users_id')
       ->select('evaluacion.id as id', 'users.name as autor' , 'users.numero_Documento as nAutor', 'evaluacion.descripcion', 'evaluacion.fecha', 'evaluacion.estado', 'evaluacion.Asignatura_eval', 'evaluacion.cant_Preg_Aig', 'evaluacion.tiempoEstipulado')
       ->get();
      // return $evaluaciones;
       return view('Inicio.pruebasConsulta', compact('evaluaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Evaluacion::create([
            'descripcion' => request('descripcion'),
            'fecha' => request('fecha'),
            'cant_Preg_Aig' => request('cantPreguntas'),
            'Asignatura_eval' => request('asignatura'),
            'tiempoEstipulado' => request('time'),
            'estado' => 'Pendiente',
            'users_id' => request('id_U'),
        ]);

        $evaluaciones = Evaluacion::where('users.id' , request('id_U'))
       ->join('users', 'users.id', '=', 'evaluacion.users_id')
       ->select('evaluacion.id as id', 'users.name as autor' , 'users.numero_Documento as nAutor', 'evaluacion.descripcion', 'evaluacion.fecha', 'evaluacion.estado', 'evaluacion.Asignatura_eval', 'evaluacion.cant_Preg_Aig', 'evaluacion.tiempoEstipulado')
       ->get();

        //return $request;
        return view('Inicio.mysPuebasCompletas', compact('evaluaciones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Meval = Evaluacion::where('users_id' , $id)
         ->where('evaluacion.estado','Realizada')
         ->join('users', 'users.id', '=', 'evaluacion.users_id')
         ->select('evaluacion.id as id', 'users.name as autor' , 'users.numero_Documento as nAutor', 'evaluacion.descripcion', 'evaluacion.fecha', 'evaluacion.estado', 'evaluacion.cant_Preg_Aig', 'evaluacion.Asignatura_eval', 'evaluacion.tiempoEstipulado')
         ->get();
         //return $Meval;
         return view('Inicio/mysEvaluaciones', compact('Meval'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
