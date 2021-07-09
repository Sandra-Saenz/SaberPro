@extends('layout')

@section('title', 'Asignatura | ' . $asignatura->nombre)

@section('content')
  <div class="container">
      <div class="bg-white p-5 shadow rounded">
          <h1>{{ $asignatura->nombre }}</h1>

          <p>lista de los programas asociados a esta asignatura</p>

          @forelse($asignatura->asignaturaPrograma as $programa)
              <li>{{ $programa->nombre }}</li>
            @empty
              <li>No hay programas asociados</li> <br>
          @endforelse

          <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('asignatura.index') }}">
                Regresar
              </a>
          </div>
      </div>
  </div>
@endsection
