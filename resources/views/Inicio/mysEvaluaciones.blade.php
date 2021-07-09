@extends('layautA')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="table-responsive">
            <h2 class="titel-table">Consulta</h2>
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Documento</th>
                  <th>Descripcion</th>
                  <th>fecha</th>
                  <th>Estado</th>
                  <th>Preg x Asig</th>
                  <th>Asig. evaluadas</th>
                  <th>Detallar</th>
                </tr>
            </thead>
            <tbody>
              @foreach($Meval as $Meval)
                <tr>
                    <td>{{$Meval->autor}}</td>
                    <td>{{$Meval->nAutor}}</td>
                    <td>{{$Meval->descripcion}}</td>
                    <td>{{$Meval->fecha}}</td>
                    <td>{{$Meval->estado}}</td>
                    <td>{{$Meval->cant_Preg_Aig}}</td>
                    <td>{{$Meval->Asignatura_eval}}</td>
                    <td>
                        <a href="{{route('vinforme.showIndividual',$Meval->id)}}">dtl</a>
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
