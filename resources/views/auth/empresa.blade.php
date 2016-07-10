@extends('layouts.app')

@section('content')

<br>
<h2 align="center"> Registrar Empresa </h2>
<br>

<form class="form-horizontal" method="post" action="{{ url('/register') }}">
  <input name="empresa" value="1" type="hidden">
  {{ csrf_field() }}
  <fieldset>
    <div class="form-group">
      <label for="inputEmail" class="col-md-4 control-label">RTN</label>
      <div class="col-md-4">
        <input class="form-control" name="rtn" type="text" value="{{ old('rtn') }}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNombre" class="col-md-4 control-label">Nombre</label>
      <div class="col-md-4">
        <input class="form-control" name="empresa-nombre" type="text" value="{{ old('empresa-nombre') }}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-md-4 control-label">Rubro</label>
      <div class="col-md-4">
        <select class="form-control" name="rubro">
        @foreach($rubros as $r)
          <option value="{{$r->id}}" {{ old('rubro') == $r->id ? "selected":"" }}>{{$r->name}}</option>
        @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-md-4 control-label">Dirección</label>
      <div class="col-md-4">
        <textarea class="form-control" rows="2" id="textArea" name="direccion" >{{ old('direccion') }}</textarea>
      </div>
    </div>
  </fieldset>
  <div class="col-md-6 col-md-offset-3"><h4 class="text-center">Información de Usuario</h4><hr></div>
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="name" class="col-md-4 control-label">Nombre</label>

      <div class="col-md-4">
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

      <div class="col-md-4">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" class="col-md-4 control-label">Contraseña</label>

      <div class="col-md-4">
          <input id="password" type="password" class="form-control" name="password">

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

      <div class="col-md-4">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

          @if ($errors->has('password_confirmation'))
              <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
          <button type="submit" class="btn btn-primary">
              <i class="fa fa-btn fa-user"></i> Registrarse
          </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-default" href="{{ url('register') }}">Registrarse como Cliente</a>
      </div>
  </div>
</form>

@stop
