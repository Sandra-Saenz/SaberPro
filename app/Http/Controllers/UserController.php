<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $usuario = User::get();
       return view('Inicio/consultaU', compact('usuario'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'TD' => ['required', 'string', 'max:30'],
            'ND' => ['required', 'string', 'max:30'],
            'name' => ['required', 'string', 'max:255'],
            'cargo' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create()
    {
        return view('Inicio.registeru');
    }

     protected function store()
    {
        User::create([
            'tipo_Documento' => request('TD'),
            'numero_Documento' => request('ND'),
            'name' => request('name'),
            'cargo' => request('cargo'),
            'email' => request('email'),
            'password' => request('password'),
        ]);

        return redirect()->route('vusuario.index');

    }



    public function edit(User $usuario){

       return view('Inicio.editU', [
            'usuario' => $usuario
       ]);
    }

    public function update(Request $request, User $usuario){

          $usuario ->update([
           'tipo_Documento' => request('TD'),
            'numero_Documento' => request('ND'),
            'name' => request('name'),
            'cargo' => request('cargo'),
            'email' => request('email')
          ]);

          return redirect()->route('vusuario.index');
    }


}
