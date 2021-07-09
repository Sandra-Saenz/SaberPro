@csrf
<div class="form-group row">
  <div class="col-md-6">
    <div class="py-2">
      <textarea class="form-control bg-light shadow-sm" name="enunciado" required rows="6" placeholder="Enunciado de la pregunta"
      >{{ old('enunciado', $pregunta->enunciado) }}</textarea>
    </div>
    <div class="py-2">
      <input class="form-control bg-light shadow-sm" type="text" name="propietario_pregunta" required placeholder="propietario de la pregunta" value="{{old('propietario_pregunta', $pregunta->propietario_pregunta)}}">
    </div>
    <div class="py-2">
      <select class="form-control bg-light shadow-sm" name="respuesta_correcta" required>
          <option value="">seleccionar respuesta correcta</option>
          <option value="a" @if (old('respuesta_correcta', $pregunta->respuesta_correcta) === "a") {{'selected'}} @endif>A</option>
          <option value="b" @if (old('respuesta_correcta', $pregunta->respuesta_correcta) === "b") {{'selected'}} @endif>B</option>
          <option value="c" @if (old('respuesta_correcta', $pregunta->respuesta_correcta) === "c") {{'selected'}} @endif>C</option>
          <option value="d" @if (old('respuesta_correcta', $pregunta->respuesta_correcta) === "d") {{'selected'}} @endif>D</option>
      </select>
    </div>
    <div class="py-2">
      <select class="form-control bg-light shadow-sm" name="asignatura_id" required>
          <option value="">seleccionar asignatura</option>
          @foreach($asignatura as $asignature)
          <option value="{{$asignature->id}}" @if (old('asignatura_id', $pregunta->asignatura_id) === $asignature->id) {{'selected'}} @endif>{{$asignature->nombre}}</option>
          @endforeach
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="py-2">
      <textarea class="form-control bg-light shadow-sm" name="respuesta_A" required placeholder="Respuesta A"
      >{{ old('respuesta_A', $respuesta->respuesta_A) }}</textarea>
    </div>
    <div class="py-2">
      <textarea class="form-control bg-light shadow-sm" name="respuesta_B" required placeholder="Respuesta B"
      >{{ old('respuesta_B', $respuesta->respuesta_B) }}</textarea>
    </div>
    <div class="py-2">
      <textarea class="form-control bg-light shadow-sm" name="respuesta_C" required placeholder="Respuesta C"
      >{{ old('respuesta_C', $respuesta->respuesta_C) }}</textarea>
    </div>
    <div class="py-2">
      <textarea class="form-control bg-light shadow-sm" name="respuesta_D" required placeholder="Respuesta D"
      >{{ old('respuesta_D', $respuesta->respuesta_D) }}</textarea>
    </div>
  </div>
</div>

<div class="form-group">
    <b>Imagen (opcional)</b>
    <input type="file" accept="image/*" class="form-control" name="imagen_enunciado">
</div>

<div class="form-group">
  <b>Documentacion (opcional, puede elegir varios)</b>
  <input type="file" accept="application/*" class="form-control" name="direccion_documentacion[]" multiple>
</div>

<div class="form-group row">
  <div class="col-md-2">
    <b>Tema</b>
    <a class="btn btn-sm btn-primary btn-circle"  name="addTema[]"><i class="glyphicon glyphicon-plus"></i></input>
    {{-- aparece cuando se toca el boton anterior <input class="form-control bg-light shadow-sm" type="text" name="nombre" required placeholder="tema de una pregunta" value="{{old('nombre', $tema->nombre)}}"> --}}
  </div>

  <div class="col-md-10">
    <select class="form-control bg-light shadow-sm" name="tema_id" required>
        <option value="">seleccionar tema</option>
        @foreach($tema as $theme)
          <option value="{{$theme->id}}" @if (old('tema_id', $theme->id) === $theme->id) {{'selected'}} @endif>{{$theme->nombre}}</option>
        @endforeach
    </select>
  </div>
</div>

<button class="btn btn-primary btn-md btn-block">
  {{$btnText}}
</button>

<a class="btn btn-link btn-block" href="{{ route('pregunta.index') }}">
  Cancelar
</a>
