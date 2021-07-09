@extends('layout')

@section('title', 'Crear Pregunta')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
          @include('partials.validation-errors')

          <form class="bg-white shadow rounded py-3 px-4" method="POST" enctype="multipart/form-data" action="{{route('pregunta.store')}}">
              <h1 class="display-4">Nueva Pregunta</h1>
              <hr>
              @include('pregunta._formPreguntaRespuesta', ['btnText' => 'Guardar'])
          </form>
      </div>
    </div>
</div>
@endsection
