@extends('layout')

@section('title', 'Editar programa')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.validation-errors')

            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('programa.update', $programa)}}">
                @method('PATCH')
                <h1 class="display-4">Editar programa</h1>
                @include('programa._formPrograma', ['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
  </div>
@endsection
