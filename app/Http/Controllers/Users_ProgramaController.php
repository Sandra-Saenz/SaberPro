<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users_Programa;
use App\Programa_Asignatura;
use App\Programa;
use App\User;


class Users_ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::select( 'users.id as id_U' ,'users.name as autor' , 'users.numero_Documento as nAutor', 'users.cargo as cargo')
        ->get();
        $programas = Programa::select( 'programa.id as id_P' ,'programa.nombre as nombre_P')
        ->get();
        $progAsig = Users_Programa::join('users', 'users.id', '=', 'users_programa.users_id')
        ->join('programa', 'programa.id', '=', 'users_programa.programa_id')
        ->select( 'users.id as id_U' ,'users.name as autor' , 'users.numero_Documento as nAutor', 'programa.id as id_P' ,'programa.nombre as nombre_P')
        ->get();
        //return $programas;
        return view('Inicio.usersPrograma', compact('usuarios', 'programas', 'progAsig'));
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

        Users_Programa::create([
            'users_id' => request('IdUser'),
            'programa_id' => request('IdPrograma'),
        ]);

        $usuarios = User::select( 'users.id as id_U' ,'users.name as autor' , 'users.numero_Documento as nAutor', 'users.cargo as cargo')
        ->get();
        $programas = Programa::select( 'programa.id as id_P' ,'programa.nombre as nombre_P')
        ->get();
        $progAsig = Users_Programa::join('users', 'users.id', '=', 'users_programa.users_id')
        ->join('programa', 'programa.id', '=', 'users_programa.programa_id')
        ->select( 'users.id as id_U' ,'users.name as autor' , 'users.numero_Documento as nAutor', 'programa.id as id_P' ,'programa.nombre as nombre_P')
        ->get();
        //return $request;
        return view('Inicio.usersPrograma', compact('usuarios', 'programas', 'progAsig'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programa = Users_Programa::where('users_id' , $id)
        ->join('users', 'users.id', '=', 'users_programa.users_id')
        ->join('programa', 'programa.id', '=', 'users_programa.programa_id')
        ->select('users_programa.programa_id as id', 'users.name as autor' , 'users.numero_Documento as nAutor', 'programa.nombre as nombreA', 'programa.id as id')
        ->get();

        return view('Inicio/seleccionP', compact('programa'));
        //return $programa;
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
