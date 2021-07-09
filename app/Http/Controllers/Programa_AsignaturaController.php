<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users_Programa;
use App\Programa_Asignatura;
use App\Programa;
use App\User;


class Programa_AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $usuarios = User::where('users.cargo' , 'Estudiante')
        ->select( 'users.id as id_U' ,'users.name as autor' , 'users.numero_Documento as nAutor', 'users.cargo as cargo')
        ->get();

        //return $Asignatura;
        return view('Inicio.seleccionPG', compact('usuarios'));
    }

    public function carga($id)
    {
        $proguser = Users_Programa::where('Users_Programa.users_id' , $id)
        ->join('users', 'users.id', '=', 'users_programa.users_id')
        ->join('programa', 'programa.id', '=', 'users_programa.programa_id')
        ->select( 'users.id as id_U' ,'users.name as autor', 'programa.id as id_P' ,'programa.nombre as nombre_P')
        ->get();


        //return $proguser;
        return view('Inicio.formEvaluacion', compact('proguser'));
    }

    public function byUser($id)
    {

        $proguser = Programa_Asignatura::where('programa_id' , $id)
        ->join('asignatura', 'asignatura.id', '=', 'Programa_Asignatura.asignatura_id')
        ->select('asignatura.id as id_A', 'asignatura.nombre as Asignatura' , 'programa_asignatura.programa_id as id_P')
        ->get();


        return $proguser;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Asignatura = Programa_Asignatura::where('programa_id' , $id)
        ->join('asignatura', 'asignatura.id', '=', 'Programa_Asignatura.asignatura_id')
        ->select('asignatura.id as id_A', 'asignatura.nombre as nombreA' , 'programa_asignatura.programa_id as id_P')
        ->get();

        return view('Inicio/index', compact('Asignatura'));
        //return $Asignatura;
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
