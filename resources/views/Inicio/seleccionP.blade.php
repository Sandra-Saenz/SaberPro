@extends('layautA')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i>Programas</h1>
    <p>Selecciona el programa en el cual deseas basarte para hacer la prueba</p>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Programas</li>
    <li class="breadcrumb-item active"><a href="#">Mys programas</a></li>
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
                    <th scope="col">Numero Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Programa</th>
                    <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody>
                @foreach($programa as $programa)
                	<tr>
		                <td>{{$programa->nAutor}}</td>
		                <td>{{$programa->autor}}</td>
		                <td>{{$programa->nombreA}}</td>
		                <td>
		                	<a class="btn btn-primary"  href="{{ route('ProgramaAsignatura.obtener', $programa->id)}}"><i class="fa fa-fw fa-lg fa-check-circle"></i>SELECT</a>
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
