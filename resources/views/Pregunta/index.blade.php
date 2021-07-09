@extends('layout')

@section('title', 'Preguntas')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0">Preguntas</h1>
    </div>
      <p class="lead text-secondary">Preguntas y respuesta que están registradas para estudiar para las pruebas saber PRO</p>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <a class="btn btn-primary" href="{{route('pregunta.create')}}">Crear pregunta</a>
        <a class="btn btn-primary" href="{{route('pregunta.upload')}}" data-toggle="modal" data-target="#upload">Cargar preguntas</a> <br>

        <form class="navbar-form navbar-left pull-right" method="get" role="search">
          <div class="input-group">
            <select class="form-control bg-light shadow-sm" name="asignatura">
                <option value="">seleccionar asignatura</option>
                @foreach($asignatura as $asignature)
                <option value="{{$asignature->id}}">{{$asignature->nombre}}</option>
                @endforeach
            </select>
            <span class="input-group-btn px-2">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </span>
          </div>
        </form>
      </div>

      <div class="table-responsive">
        <table class="table table-hover align-items-center">
            <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>ENUNCIADO</th>
                <th>RESPUESTA A</th>
                <th>RESPUESTA B</th>
                <th>RESPUESTA C</th>
                <th>RESPUESTA D</th>
                <th>PROPIETARIO PREGUNTA</th>
                <th>ASIGNATURA</th>
                <th>OPCIONES</th>
            </tr>
          </thead>
                @foreach($pregunta as $ask)
                  <tbody>
                      <tr>
                            <td>{{ $ask->id }}</td>
                            <td>{{ $ask->enunciado }}</td>
                            @foreach ($ask->preguntaRespuesta as $preguntaRespuesta)
                              <td>{{ $preguntaRespuesta->respuesta_A }}</td>
                              <td>{{ $preguntaRespuesta->respuesta_B }}</td>
                              <td>{{ $preguntaRespuesta->respuesta_C }}</td>
                              <td>{{ $preguntaRespuesta->respuesta_D }}</td>
                            @endforeach
                            <td>{{ $ask->propietario_pregunta }}</td>
                            <td>{{ $ask->preguntaAsignatura->nombre }}</td>

                              <td>
                                  <a href="{{ route('pregunta.edit', $ask->id) }}" class="btn btn-sm btn-primary">
                                      Editar
                                  </a>
                                  <a href="{{ route('pregunta.show', $ask->id) }}" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#show">
                                      Ver
                                  </a>
                             </td>
                       </tr>
                   </tbody>
                 @endforeach
        </table>
        @include('pregunta.upload')
      </div>
      {{ $pregunta->links() }}
</div>
@endsection
