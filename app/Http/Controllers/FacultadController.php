<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;

class FacultadController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $facultad = Facultad::nombre($request->get('nombre'))->simplePaginate(15);
        return view('facultad.index', compact('facultad'));
    }

    public function create()
    {
        return view('facultad.create', [
         'facultad' => new Facultad
        ]);
    }

    public function store(Facultad $facultad)
    {
        $facultad = request()->validate([
           'nombre'=>'required',
         ]);
        Facultad::create( $facultad );
        return redirect()->route('facultad.index')->with('status', 'La facultad fue creada con exito');
    }

    public function show(Facultad $facultad)
    {
        $facultad = Facultad::find($facultad->id);
        return view( 'facultad.show',compact('facultad'));
    }

    public function edit(Facultad $facultad)
    {
        return view( 'facultad.edit', [
         'facultad' => $facultad
        ]);
    }

    public function update(Facultad $facultad)
    {
        $facultad->update([
          'nombre' => request('nombre'),
        ]);
        return redirect()->route('facultad.index')->with('status', 'La facultad fue actualizada con exito');
    }

}
