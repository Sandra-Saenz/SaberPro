@extends('layout')

@section('title', 'Editar asignatura')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.validation-errors')

            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('asignatura.update', $asignatura)}}">
                @method('PATCH')
                <h1 class="display-4">Editar asignatura</h1>
                @include('asignatura._formAsignatura', ['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
  </div>
@endsection
