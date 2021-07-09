@csrf
<div class="form-group">
  <input class="form-control bg-light shadow-sm" type="text" name="nombre" placeholder="nombre de la competencia" value="{{old('nombre', $competencia->nombre)}}">
</div>

<button class="btn btn-primary btn-md btn-block">
  {{$btnText}}
</button>

<a class="btn btn-link btn-block" href="{{ route('competencia.index') }}">
  Cancelar
</a>
