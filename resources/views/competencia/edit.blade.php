@extends('layout')

@section('title', 'Editar competencia')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.validation-errors')

            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('competencia.update', $competencia)}}">
                @method('PATCH')
                <h1 class="display-4">Editar competencia</h1>
                @include('competencia._formCompetencia', ['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
  </div>
@endsection
