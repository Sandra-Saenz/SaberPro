@extends('layout')

@section('title', 'Facultad | ' . $facultad->nombre)

@section('content')
  <div class="container">
      <div class="bg-white p-5 shadow rounded">
          <h1>{{ $facultad->nombre }}</h1>

          <p>lista de los programas asociados a esta facultad</p>

          @forelse($facultad->facultadPrograma as $programa)
            <li>{{ $programa->nombre }}</li>
            @empty
            <li>No hay programas asociados</li> <br>
          @endforelse

          <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('facultad.index') }}">
                Regresar
              </a>
          </div>
      </div>
  </div>
@endsection
