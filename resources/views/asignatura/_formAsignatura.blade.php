@csrf
<div class="form-group">
  <input class="form-control bg-light shadow-sm" type="text" name="nombre" placeholder="nombre de la asignatura" value="{{old('nombre', $asignatura->nombre)}}" required>
</div>

<div class="form-group" >
  <select class="form-control bg-light shadow-sm" name="competencia_id" required>
    <option value="">seleccionar competencia</option>
      @foreach($competencia as $competence)
        <option value="{{ $competence->id }}" @if (old('competencia_id', $asignatura->competencia_id) === $competence->id) {{'selected'}} @endif>{{ $competence->nombre }}</option>
      @endforeach
  </select>
</div>

<button class="btn btn-primary btn-md btn-block">
  {{$btnText}}
</button>

<a class="btn btn-link btn-block" href="{{ route('asignatura.index') }}">
  Cancelar
</a>
