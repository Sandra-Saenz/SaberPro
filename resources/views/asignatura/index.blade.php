@extends('layout')

@section('title', 'Asignatura')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0">Asignaturas</h1>
    </div>

    <p class="lead text-secondary">Asignaturas que califica el icfes en su examen saber Pro.</p>

    <div class="d-flex justify-content-between align-items-center mb-3">
          <a class="btn btn-primary" href="{{route('asignatura.create')}}">Crear</a> <br>

          <form class="navbar-form navbar-left pull-right" method="get" role="search">
            <div class="input-group">
              <input placeholder="Asignatura..." class="form-control form-text" type="text" name="nombre"/>
              <span class="input-group-btn px-2">
                <button type="submit" class="btn btn-primary btn-md btn-block">Buscar</button>
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
                <th>COMPETENCIA</th>
                <th>OPCIONES</th>
            </tr>
          </thead>
                @foreach($asignatura as $asignature)
                  <tbody>
                    <tr>
                          <td>{{ $asignature->id }}</td>
                          <td>{{ $asignature->nombre }}</td>
                          <td>{{ $asignature->asignaturaCompetencia->nombre }}</td>

                            <td>
                                <a href="{{ route('asignatura.edit', $asignature->id) }}" class="btn btn-sm btn-primary">
                                    Editar
                                </a>
                                <a href="{{ route('asignatura.show', $asignature->id) }}" class="btn btn-sm btn-primary">
                                    Ver
                                </a>
                            </td>
                       </tr>
                   </tbody>
                 @endforeach
        </table>
      </div>
      {{ $asignatura->links() }}
</div>
@endsection
