@csrf
<div class="form-group row">
  <label class="control-label col-md-2">Nombre</label>
  <div class="col-md-10">
    <input class="form-control" type="text" name="nombre" placeholder="nombre de la competencia" value="{{old('nombre', $competencia->nombre)}}" required autocomplete="nombre" autofocus>
</div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary px-3">{{$btnText}}</button>
        <a class="btn btn-link px-3" href="{{ route('competencia.index') }}">Cancelar</a>
    </div>
</div>
