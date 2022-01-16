@extends('layout')

@section('title', 'Pregunta')

@section('content')
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Pregunta</h1>
      <p>Consultar Preguntas</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Pregunta</li>
      <li class="breadcrumb-item active"><a href="{{ route('pregunta.index') }}">Consultar</a></li>
    </ul>
  </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="form-group row">
              <div class="col-md-10">
                  <h2 class="display-4 mb-0">PREGUNTAS</h2>
              </div>
              <div class="col-md-2">
                  <a class="btn btn-primary btn-md" href="{{route('pregunta.upload')}}" data-toggle="modal" data-target="#upload">Cargar preguntas</a> <br>
              </div>
            </div>
            <div class="tile-body">
                <p class="breadcrumb-item">Preguntas y respuesta que están registradas para estudiar las pruebas saber PRO</p>
                <hr>
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">ENUNCIADO</th>
                          <th scope="col">RESPUESTA A</th>
                          <th scope="col">RESPUESTA B</th>
                          <th scope="col">RESPUESTA C</th>
                          <th scope="col">RESPUESTA D</th>
                          <th scope="col">PROPIETARIO PREGUNTA</th>
                          <th scope="col">ASIGNATURA</th>
                          <th scope="col">OPCIONES</th>
                      </tr>
                  </thead>
                  <tbody>
                @foreach($pregunta as $ask)
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
                                {{-- <button type="button" class="btn-edit" data-toggle="modal" data-target="#ventanaModal{{$faculty->id}}">Editar</button> --}}
                                  <a href="{{ route('pregunta.edit', $ask->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                  <a href="{{ route('pregunta.show', $ask->id) }}" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#show">Ver</a>
                             </td>
                       </tr>
                   </tbody>
                 @endforeach
        </table>
        @include('pregunta.upload')
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
