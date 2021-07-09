@extends('layout')

@section('content')

<div class="app-title">
	<div class="app-title">
	    <div>
		    <h1><i class="fa fa-dashboard"></i>Evaluacion</h1>
		    <p>Asignacion de Pruebas</p>
	    </div>
	    <ul class="app-breadcrumb breadcrumb">
		    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		    <li class="breadcrumb-item"><a href="#">Pruebas</a></li>
	    </ul>
	</div>
</div>

<div class="container">
<div class="tile">
  <h3 class="tile-title">Formulario</h3>
  <div class="tile-body">

    <form>
      @csrf

	    <div class="form-group">
	        <label for="exampleSelect1">Programa:</label>
	        <select class="form-control" id="Select1">
	          <option value="">seleccione el usuario</option>
	           @foreach($proguser as $proguser)
	              <option value="{{$proguser->id_P}}">{{$proguser->nombre_P}}</option>
	           @endforeach
	        </select>
	    </div>

        <div class="form-group">
	        <label for="exampleSelect1">Asignatura:</label>
	        <select class="form-control" id="Select2">
	              <option value="">todas</option>
	        </select>
        </div>

	      <div class="form-group">
	        <label class="control-label">Descripcion:</label>
	        <textarea class="form-control" type="text" rows="4" name="descripcion" placeholder="Ingese una Descripcion"></textarea>
	      </div>

         <div class="form-group">
	        <label for="exampleSelect1">Programa:</label>
	        <select class="form-control" id="Select2">
	              <option value="">seleccione el programa</option>
	        </select>
        </div>


      <div class="form-group">
        <label for="exampleSelect1">Preguntas por Asignaturas:</label>
        <select class="form-control" id="exampleSelect1" name="cantPreguntas">
          <option>10</option>
          <option>15</option>
          <option>20</option>
          <option>25</option>
          <option>30</option>
        </select>
      </div>

       <div class="form-group">
        <label for="exampleSelect1">Preguntas por Asignaturas:</label>
        <input class="form-control" type="time" name="time">
      </div>

      <div class="form-group row">
        <label for="example-date-input" class="col-2 col-form-label">Fecha:</label>
        <div class="col-10">
          <input class="form-control" name="fecha" type="date" id="example-date-input" min="{{ date('Y-m-d') }}">
        </div>
      </div>

       <div class="ftile-footer">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </form>
  </div>

</div>

@endsection
