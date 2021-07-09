@extends('layout')

@section('title', 'Competencia')

@section('content')
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0">Competencias</h1>
    </div>
      <p class="lead text-secondary">Competencias que califica el icfes en su examen saber Pro.</p>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <a class="btn btn-primary" href="{{route('competencia.create')}}">Crear</a> <br>

        <form class="navbar-form navbar-left pull-right" method="get" role="search">
          <div class="input-group">
            <input placeholder="Competencia..." class="form-control form-text" type="text" name="nombre"/>
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
              <th>OPCIONES</th>
          </tr>
        </thead>
              @foreach($competencia as $compet)
                <tbody>
                    <tr>
                          <td>{{ $compet->id }}</td>
                          <td>{{ $compet->nombre }}</td>

                            <td>
                                <a href="{{ route('competencia.edit', $compet->id) }}" class="btn btn-sm btn-primary">
                                    Editar
                                </a>
                                <a href="{{ route('competencia.show', $compet->id) }}" class="btn btn-sm btn-primary">
                                    Ver
                                </a>
                            </td>
                     </tr>
                 </tbody>
               @endforeach
      </table>
    </div>
    {{ $competencia->links() }}
</div>
@endsection
