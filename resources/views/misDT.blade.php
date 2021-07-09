@extends('layautA')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i>My Informacion</h1>
    <p>Consulta Mis Datos</p>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Data</li>
    <li class="breadcrumb-item active"><a href="#">My Informacion</a></li>
  </ul>
</div>

<div class="container-dt">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mis Datos') }}</div>
                <div class="card-body">
                    <label>Numero De Documento: </label>
                    <a href="">{{ Auth::user()->numero_Documento}}</a><br>
                    <label>Nombre: </label>
                    <a href="">{{ Auth::user()->name}}</a><br>
                    <label>Cargo: </label>
                    <a href="">{{ Auth::user()->cargo}}</a><br>
                    <label>E-mail: </label>
                    <a href="">{{ Auth::user()->email}}</a><br>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('js/plugins/pace.min.js') }}"></script>

@endsection
