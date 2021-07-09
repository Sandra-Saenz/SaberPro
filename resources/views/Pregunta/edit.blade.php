@extends('layout')

@section('title', 'Editar Pregunta')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('partials.validation-errors')

            <form class="bg-white shadow rounded py-3 px-4" method="POST" enctype="multipart/form-data" action="{{route('pregunta.update', $pregunta)}}">
                @method('PATCH')
                <h1 class="display-4">Editar Pregunta</h1>
                @include('Pregunta._formPreguntaRespuesta', ['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
  </div>
@endsection
