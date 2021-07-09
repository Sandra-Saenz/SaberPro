@extends('layout')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Table</h1>
    <p>Consulta Evaluaciones</p>
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
                  <th>Nombre</th>
                  <th>Documento</th>
                  <th>Descripcion</th>
                  <th>fecha</th>
                  <th>Estado</th>
                  <th>Pre x Asi</th>
                  <th>Asig. evaluadas</th>
                  <th>Tiempo</th>
                  <th>Detallar</th>
                </tr>
            </thead>
            <tbody>
              @foreach($evaluaciones as $evaluaciones)
                <tr>
                    <td>{{$evaluaciones->autor}}</td>
                    <td>{{$evaluaciones->nAutor}}</td>
                    <td>{{$evaluaciones->descripcion}}</td>
                    <td>{{$evaluaciones->fecha}}</td>
                    <td>{{$evaluaciones->estado}}</td>
                    <td>{{$evaluaciones->cant_Preg_Aig}}</td>
                    <td>{{$evaluaciones->Asignatura_eval}}</td>
                    <td>{{$evaluaciones->tiempoEstipulado}}</td>
                    <td>
                        <a href="{{route('vinforme.show', $evaluaciones)}}">dtl</a>
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
