@extends('layout')

@section('title', 'Programa')

@section('content')
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Programa</h1>
      <p>Consultar Programas</p>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Programa</li>
      <li class="breadcrumb-item active"><a href="{{ route('facultad.index') }}">Consultar</a></li>
    </ul>
  </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
              <h2 class="display-4 mb-0">PROGRAMAS</h2>
            <div class="tile-body">
                <p class="breadcrumb-item">programas que estan registrados para estudiar las pruebas saber PRO</p>
                <hr>
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">FACULTAD</th>
                          <th scope="col">OPCIONES</th>
                      </tr>
                  </thead>
              <tbody>
                @foreach($programa as $program)
                      <tr>
                            <td>{{ $program->id }}</td>
                            <td>{{ $program->nombre }}</td>
                            <td>{{ $program->programaFacultad->nombre }}</td>
                            <td>
                              {{-- <button type="button" class="btn-edit" data-toggle="modal" data-target="#ventanaModal{{$faculty->id}}">Editar</button> --}}
                                  <a href="{{ route('programa.edit', $program->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                  <a href="{{ route('programa.show', $program->id) }}" class="btn btn-sm btn-primary">Ver</a>
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
</div>
@endsection
