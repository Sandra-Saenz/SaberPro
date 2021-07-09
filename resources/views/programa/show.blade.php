@extends('layout')

@section('title', 'Programa | ' . $programa->nombre)

@section('content')
  <div class="container">
      <div class="bg-white p-5 shadow rounded">
          <h1>{{ $programa->nombre }}</h1>

          <p>lista de las asignaturas asociadas a este programa</p>

          @forelse($programa->programaAsignatura as $asignatura)
              <li>{{ $asignatura->nombre }}</li>
            @empty
              <li>No hay asignaturas asociadas</li> <br>
          @endforelse

          <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('programa.index') }}">
                Regresar
              </a>
          </div>
      </div>
  </div>
@endsection
