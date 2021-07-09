@extends('layout')

@section('content')
<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Inquietudes</h1>
          <p>Resuelve tus Inquietudes</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Inquietudes</a></li>
        </ul>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">My Aplicativo</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <video src="videos/pruebaV.mp4" loop autoplay  controls></video>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Competencia Ciudadana</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <video src="videos/Comp_Ciu.mp4" loop autoplay  controls></video>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Comunicacion Escrita</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <video src="videos/Comu_Es.mp4" loop autoplay  controls></video>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Ingles</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <video src="videos/Ingles.mp4" loop autoplay  controls></video>
      </div>
    </div>
  </div>
   <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Lectura Critica</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <video src="videos/Lec_Crit.mp4" loop autoplay  controls></video>
      </div>
    </div>
  </div>
   <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title">Razonamiento Cuantico</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <video src="videos/Razo_Cuant.mp4" loop autoplay  controls></video>
      </div>
    </div>
  </div>
</div>

@endsection
