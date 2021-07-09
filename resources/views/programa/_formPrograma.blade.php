@csrf
<div class="form-group">
  <input class="form-control bg-light shadow-sm" type="text" name="nombre" required placeholder="nombre del programa" value="{{ old('nombre', $programa->nombre) }}">
</div>

<div class="form-group">
  <select class="form-control bg-light shadow-sm" name="facultad_id">
      <option value="">seleccionar facultad</option>
      @foreach($facultad as $faculty)
      <option value="{{$faculty->id}}" @if (old('facultad_id',$programa->facultad_id) === $faculty->id) {{'selected'}} @endif>{{$faculty->nombre}}</option>
      @endforeach
  </select>
</div>

<label class="form-check-label">Seleccionar las asignaturas a evaluar del programa:</label> <br>
<div class="form-group form-check">
  @foreach ($asignatura as $asignature)
    <input type="checkbox" class="form bg-light shadow-sm" name="asignatura[]" value="{{$asignature->id}}" {{ ($programa->programaAsignatura->contains($asignature->id)) ? 'checked' : '' }}> {{ $asignature->nombre }}<br>
  @endforeach
</div>

<button class="btn btn-primary btn-md btn-block">
  {{$btnText}}
</button>

<a class="btn btn-link btn-block" href="{{ route('programa.index') }}">
  Cancelar
</a>
