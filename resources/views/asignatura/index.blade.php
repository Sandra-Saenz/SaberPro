@extends('layout')

@section('title', 'Asignatura')

@section('content')
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Asignatura</h1>
      <p>Consultar Asignaturas</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Asignatura</li>
      <li class="breadcrumb-item active"><a href="{{ route('facultad.index') }}">Consultar</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
          <h2 class="display-4 mb-0">ASIGNATURAS</h2>
        <div class="tile-body">
            <p class="breadcrumb-item">Asignaturas que califica el icfes en su examen saber Pro</p>
            <hr>
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">COMPETENCIA</th>
                      <th scope="col">OPCIONES</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($asignatura as $asignature)
                    <tr>
                          <td>{{ $asignature->id }}</td>
                          <td>{{ $asignature->nombre }}</td>
                          <td>{{ $asignature->asignaturaCompetencia->nombre }}</td>
                            <td>
                              {{-- <button type="button" class="btn-edit" data-toggle="modal" data-target="#ventanaModal{{$faculty->id}}">Editar</button> --}}
                                <a href="{{ route('asignatura.edit', $asignature->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="{{ route('asignatura.show', $asignature->id) }}" class="btn btn-sm btn-primary">Ver</a>
                            </td>
                       </tr>

                 @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
