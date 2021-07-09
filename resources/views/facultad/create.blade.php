@extends('layout')

@section('title', 'Crear facultad')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 col-lg-6 mx-auto">
          @include('partials.validation-errors')

          <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('facultad.store')}}">
              <h1 class="display-4">Nueva facultad</h1>
              <hr>

              @include('facultad._formFacultad', ['btnText' => 'Guardar'])
          </form>
      </div>
    </div>
</div>
@endsection
