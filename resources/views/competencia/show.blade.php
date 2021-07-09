@extends('layout')

@section('title', 'Competencia | ' . $competencia->nombre)

@section('content')
  <div class="container">
      <div class="bg-white p-5 shadow rounded">
          <h1>{{ $competencia->nombre }}</h1>

          <p>lista de las asignaturas asociadas a esta competencia</p>

          @forelse($competencia->competenciaAsignatura as $asignatura)
              <li>{{ $asignatura->nombre }}</li>
            @empty
              <li>No hay programas asociados</li> <br>
          @endforelse

          <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('competencia.index') }}">
                Regresar
              </a>
          </div>
      </div>
  </div>
@endsection
