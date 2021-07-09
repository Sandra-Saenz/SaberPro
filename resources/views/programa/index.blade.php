@extends('layout')

@section('title', 'Programa')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0">Programas</h1>
    </div>
      <p class="lead text-secondary">programas que estan registrados para estudiar para las pruebas saber PRO</p>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <a class="btn btn-primary" href="{{route('programa.create')}}">Crear</a> <br>

        <form class="navbar-form navbar-left pull-right" method="get" role="search">
          <div class="input-group">
            <input placeholder="Programa..." class="form-control form-text" type="text" name="nombre"/>
            <span class="input-group-btn px-2">
              <button type="submit" class="btn btn-primary btn-md">Buscar</button>
            </span>
          </div>
        </form>
      </div>

      <div class="table-responsive">
        <table class="table table-hover align-items-center">
            <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>NOMBRE</th>
                <th>FACULTAD</th>
                <th>OPCIONES</th>
            </tr>
          </thead>
                @foreach($programa as $program)
                  <tbody>
                      <tr>
                            <td>{{ $program->id }}</td>
                            <td>{{ $program->nombre }}</td>
                            <td>{{ $program->programaFacultad->nombre }}</td>

                              <td>
                                  <a href="{{ route('programa.edit', $program->id) }}" class="btn btn-sm btn-primary">
                                      Editar
                                  </a>
                                  <a href="{{ route('programa.show', $program->id) }}" class="btn btn-sm btn-primary">
                                      Ver
                                  </a>
                             </td>
                       </tr>
                   </tbody>
                 @endforeach
        </table>
      </div>
      {{ $programa->links() }}
</div>
@endsection
