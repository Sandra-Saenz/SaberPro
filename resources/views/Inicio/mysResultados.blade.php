@extends('layautA')

@section('content')


<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Espesifica</h1>
    <p>Consultar Informe</p>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active"><a href="#">Data Espesifica</a></li>
  </ul>
</div>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        @foreach($informeP as $informeP)
            <label>Numero De Documento: </label>
            <a href="">{{$informeP->numero_Documento}}</a><br>
            <label>Nombre: </label>
            <a href="">{{$informeP->nombre_completo}}</a><br>
            <label>Fecha: </label>
            <a href="">{{$informeP->fecha}}</a><br>
            <label>programa: </label>
            <a href="">{{$informeP->programa}}</a><br>
            <label>Puntuacion Total: </label>
            <a href="">{{$informeP->puntaje_global}}</a><br>
        @endforeach
      </div>
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">Percentil</h3>
          <div class="embed-responsive embed-responsive-16by9">
            <canvas class="embed-responsive-item" id="radarChartDemo"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="Dg">
      <div class="card-header">Datos Generales</div>
      <table class="table table-hover table-bordered" id="sampleTable">
        <thead>
          <tr>
            <th scope="col">MÓDULOS</th>
            <th scope="col">DE 300 PUNTOS, OBTUBO</th>
            <th scope="col">PERCENTIL UBICASION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Comunicacion Escrita</td>
            <td>{{$informeP->puntaje_comu_escrita}}</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>Razonamiento Cuantico</td>
            <td>{{$informeP->puntaje_razon_cuantitativo}}</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>Lectura Critica</td>
            <td>{{$informeP->puntaje_lectura_critica}}</td>
            <td>@twitter</td>
          </tr>
           <tr>
            <td>Competencia Ciudadana</td>
            <td>{{$informeP->puntaje_compe_ciudadana}}</td>
            <td>@twitter</td>
          </tr>
           <tr>
            <td>Ingles</td>
            <td>{{$informeP->puntaje_ingles}}</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="Dg">
      <div class="card-header">Datos Espesificos</div>
      <table class="table table-hover table-bordered" id="sampleTable">
        <thead>
          <tr>
            <th>MÓDULOS</th>
            <th>DE 300 PUNTOS, OBTUBO</th>
            <th>PERCENTIL UBICASION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Primera Competencia Espesifica</td>
            <td>{{$informeP->puntuacion_comp_espe_1}}</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>Segunda Competencia Espesificao</td>
            <td>{{$informeP->puntuacion_comp_espe_2}}</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>Tercera Competencia Espesifica</td>
            <td>{{$informeP->puntuacion_comp_espe_3}}</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Page specific javascripts-->
<script type="text/javascript" src="{{ asset('js/plugins/chart.js')}}"></script>
<script type="text/javascript">
  var data = {
    labels: ["Escrita", "Cuantico", "Critica", "Ciudadana", "Ingles", "Esp1", "Esp2", "Esp3"],
    datasets: [
      {
        label: "My First dataset",
        fillColor: "rgba(220,220,220,0.2)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data: [65, 59, 80, 81, 56, 30, 50, 45]
      },
      {
        label: "My Second dataset",
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(151,187,205,1)",
        data: [28, 48, 40, 19, 86, 30, 50, 45]
      }
    ]
  };

  var ctxr = $("#radarChartDemo").get(0).getContext("2d");
  var radarChart = new Chart(ctxr).Radar(data);
</script>

@endsection
