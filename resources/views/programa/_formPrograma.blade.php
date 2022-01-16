@csrf
<div class="form-group row">
  <label class="control-label col-md-2">Nombre</label>
  <div class="col-md-10">
      <input class="form-control" type="text" name="nombre" required placeholder="nombre del programa" value="{{ old('nombre', $programa->nombre) }}" autocomplete="nombre" autofocus>
  </div>
</div>

<div class="form-group row">
  <label class="control-label col-md-2"></label>
  <div class="col-md-10">
    <select class="form-control" name="facultad_id" required>
        <option value="">seleccionar facultad</option>
        @foreach($facultad as $faculty)
        <option value="{{$faculty->id}}" @if (old('facultad_id',$programa->facultad_id) === $faculty->id) {{'selected'}} @endif>{{$faculty->nombre}}</option>
        @endforeach
    </select>
  </div>
</div>

<div class="form-group row">
  <label class="control-label col-md-12 ">Seleccionar las asignaturas a evaluar del programa:</label>
  <div class="col-md-10">
    <div class="form-group form-check">
      @foreach ($asignatura as $asignature)
        <input type="checkbox" class="form bg-light shadow-sm" name="asignatura[]" value="{{$asignature->id}}" {{ ($programa->programaAsignatura->contains($asignature->id)) ? 'checked' : '' }}> {{ $asignature->nombre }}<br>
      @endforeach
    </div>
  </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary px-3">{{$btnText}}</button>
        <a class="btn btn-link px-3" href="{{ route('programa.index') }}">Cancelar</a>
    </div>
</div>
