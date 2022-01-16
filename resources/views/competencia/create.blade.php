@extends('layout')

@section('title', 'crear competencia')

@section('content')
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Competencia</h1>
      <p>Registrar Competencia</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Competencia</li>
      <li class="breadcrumb-item active"><a href="{{ route('competencia.create') }}">Registrar</a></li>
    </ul>
  </div>

  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Registrar</h3>
      <div class="tile-body">
          @include('partials.validation-errors')
          <form class="px-4" method="POST" action="{{route('competencia.store')}}">
              <hr>
              @include('competencia._formCompetencia', ['btnText' => 'Guardar'])
          </form>
      </div>
    </div>
</div>
@endsection
