@extends('layout')

@section('content')

<div class="col-md-6">
  <div class="tile">
    <h3 class="tile-title">Register</h3>
    <div class="tile-body">


        <form method="POST" action="{{ route('vusuario.store') }}">
            @csrf
        <div class="form-group row">
          <label class="control-label col-md-3">TD:</label>
          <div class="col-md-8">
            <input class="form-control"  id="TD" type="text" name="TD" value="{{ old('TD') }}" required autocomplete="TD" autofocus placeholder="Tipo de Cedula">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-3">ND:</label>
          <div class="col-md-8">
            <input class="form-control" id="ND" type="text" name="ND" value="{{ old('ND') }}" required autocomplete="ND" autofocus placeholder="Enter full Cedula">
          </div>
        </div>
         <div class="form-group row">
          <label class="control-label col-md-3">Nombre:</label>
          <div class="col-md-8">
            <input class="form-control" id="name" type="text" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter full name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
          </div>
        </div>
          <div class="form-group row">
          <label class="control-label col-md-3">Cargo:</label>
          <div class="col-md-8">
            <input class="form-control" id="cargo" type="text" name="cargo" value="{{ old('cargo') }}" required autocomplete="cargo" autofocus  placeholder="Enter full Cargo">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-3">ND:</label>
          <div class="col-md-8">
             <input class="form-control col-md-8" id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
          </div>
        </div>
          <div class="form-group row">
          <label class="control-label col-md-3">Passwore:</label>
          <div class="col-md-8">
            <input class="form-control col-md-8" id="password" type="password" @error('password') is-invalid @enderror name="password" required autocomplete="new-password" placeholder="Enter email Passwore">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-3">Confirme Passwore:</label>
          <div class="col-md-8">
            <input class="form-control" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Enter full Passwore">
          </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
