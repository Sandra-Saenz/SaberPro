@extends('layout')

@section('title', 'Crear programa')

@section('content')
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Programa</h1>
      <p>Registrar Programa</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Programa</li>
      <li class="breadcrumb-item active"><a href="{{ route('facultad.create') }}">Registrar</a></li>
    </ul>
  </div>

  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Registrar</h3>
      <div class="tile-body">
          @include('partials.validation-errors')
          <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('programa.store')}}">
              <hr>
              @include('programa._formPrograma', ['btnText' => 'Guardar'])
          </form>
      </div>
    </div>
</div>
@endsection
