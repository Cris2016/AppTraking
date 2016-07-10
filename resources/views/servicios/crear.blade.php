@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Crear Nuevo Trabajo</h2>
            <form class="form-horizontal" method="post" action="{{ URL::route('servicios.guardar') }}">
            <input name="empresa" value="1" type="hidden">
            {{ csrf_field() }}
            <fieldset>
                <div class="form-group">
                    <label for="inputEmail" class="col-md-3 control-label">Cliente</label>
                    <div class="col-md-6">
                        <select name="cliente" class="form-control">
                            @foreach(App\Models\Cliente::all() as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNombre" class="col-md-3 control-label">Nombre del trabajo</label>
                    <div class="col-md-6">
                        <input class="form-control" name="nombre" type="text" value="{{ old('empresa-nombre') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="textArea" class="col-md-3 control-label">Descripción</label>
                    <div class="col-md-6">
                        <textarea class="form-control" rows="2" id="textArea" name="descripcion" >{{ old('direccion') }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </div>
            </fieldset>
            </form>
        </div>
    </div>
</div>
@stop