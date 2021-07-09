@extends('layout')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Table</h1>
    <p>Consulta Usuarios</p>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
                <tr>
                    <th scope="col">T.D</th>
                    <th scope="col">Numero Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuario as $usuario)
                <tr>
                  <td>{{$usuario->tipo_Documento}}</td>
                  <td>{{$usuario->numero_Documento}}</td>
                  <td>{{$usuario->name}}</td>
                  <td>{{$usuario->cargo}}</td>
                  <td>{{$usuario->email}}</td>
                  <td>

                    <button type="button" class="btn-edit" data-toggle="modal" data-target="#ventanaModal{{$usuario->id}}">EDIT</button>

                      <div class="modal" id="ventanaModal{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                            </div>
                            <div class="modal-body">

                                <form  method="POST" action="{{route('vusuario.update', $usuario)}}">
                                  @csrf @method('PUT')
                                  <div class="form-group row">
                                    <label class="control-label col-md-3">TD:</label>
                                    <div class="col-md-8">
                                      <input class="form-control"  id="TD" type="text" name="TD" value="{{$usuario->tipo_Documento}}" required autocomplete="TD" autofocus placeholder="Tipo de Cedula">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="control-label col-md-3">ND:</label>
                                    <div class="col-md-8">
                                      <input class="form-control" id="ND" type="text" name="ND" value="{{$usuario->numero_Documento}}" required autocomplete="ND" autofocus placeholder="Enter full Cedula">
                                    </div>
                                  </div>
                                   <div class="form-group row">
                                    <label class="control-label col-md-3">Nombre:</label>
                                    <div class="col-md-8">
                                      <input class="form-control" id="name" type="text" @error('name') is-invalid @enderror name="name" value="{{$usuario->name}}" required autocomplete="name" autofocus placeholder="Enter full name">
                                              @error('name')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                    <label class="control-label col-md-3">Cargo:</label>
                                    <div class="col-md-8">
                                      <input class="form-control" id="cargo" type="text" name="cargo" value="{{$usuario->cargo}}" required autocomplete="cargo" autofocus  placeholder="Enter full Cargo">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="control-label col-md-3">ND:</label>
                                    <div class="col-md-8">
                                       <input class="form-control col-md-8" id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{$usuario->email}}" required autocomplete="email" placeholder="Enter email address">
                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                    </div>
                                  </div>

                                  <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Guardar Cambios') }}
                                        </button>
                                    </div>
                                  </div>
                                </form>

                            </div>
                          </div>
                        </div>
                      </div>
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
