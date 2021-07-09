@extends('layout')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i>Asignar Programa</h1>
    <p>Relacione sus Usuarios con los programas</p>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Users</li>
    <li class="breadcrumb-item active"><a href="#">Asignar Programa</a></li>
  </ul>
</div>

  <div class="container">
    <div class="tile">
      <h3 class="tile-title">Formulario De Asignacion</h3>
      <div class="tile-body">

        <form method="POST" action="{{route('UserPrograma.store')}}">
          @csrf
          <div class="form-group">
            <label for="exampleSelect1">Selecione el Usuario:</label>
            <select class="form-control" id="IdUser" name="IdUser">
               @foreach($usuarios as $usuarios)
                  <option value="{{$usuarios->id_U}}">{{$usuarios->nAutor}}</option>
               @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleSelect1">Selecione el programa</label>
            <select class="form-control" id="IdPrograma" name="IdPrograma">
               @foreach($programas as $programas)
                  <option value="{{$programas->id_P}}">{{$programas->nombre_P}}</option>
               @endforeach
            </select>
          </div>

          <div class="ftile-footer">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

    <div class="tile">
      <h3 class="tile-title">Formulario De Asignacion</h3>
      <div class="tile-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
                <tr>
                    <th scope="col">Numero Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Programa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($progAsig as $progAsig)
                <tr>
                  <td>{{$progAsig->nAutor}}</td>
                  <td>{{$progAsig->autor}}</td>
                  <td>{{$progAsig->nombre_P}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection
