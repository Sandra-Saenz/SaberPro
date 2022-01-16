@extends('layout')

@section('title', 'Crear asignatura')

@section('content')
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Asignatura</h1>
      <p>Registrar Asignatura</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Asignatura</li>
      <li class="breadcrumb-item active"><a href="{{ route('asignatura.create') }}">Registrar</a></li>
    </ul>
  </div>

  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Registrar</h3>
      <div class="tile-body">
          @include('partials.validation-errors')
          <form class="px-4" method="POST" action="{{route('asignatura.store')}}">
              <h1 class="display-4">Nueva asignatura</h1>
              <hr>
              @include('asignatura._formAsignatura', ['btnText' => 'Guardar'])
          </form>
      </div>
    </div>
</div>
@endsection
