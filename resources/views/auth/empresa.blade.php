@extends('layouts.app')

@section('content')

<br>
<h2 align="center"> Registrar Empresa </h2>
<br>

<form class="form-horizontal">
  <fieldset>
    <div class="form-group">
      <label for="inputEmail" class="col-md-4 control-label">RTN</label>
      <div class="col-md-4">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNombre" class="col-md-4 control-label">Nombre</label>
      <div class="col-md-4">
        <input class="form-control" id="inputNombre" placeholder="Nombre" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-md-4 control-label">Rubro</label>
      <div class="col-md-4">
        <input class="form-control" id="inputPassword" placeholder="Rubro" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-md-4 control-label">Dirección</label>
      <div class="col-md-4">
        <textarea class="form-control" rows="2" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </fieldset>
</form>

@stop
