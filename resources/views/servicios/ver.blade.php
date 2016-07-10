@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $servicio->nombre }} <br>
            <small><span class="label {{$labels[$servicio->estado->codigo]}}">{{ $servicio->estado->nombre }}</span></small></h1>
            <p>{{ $servicio->descripcion }}</p>
            <hr>
        </div>
    </div>
    @if(\Auth::user()->esEmpleado())
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <form action="{{ URL::route('servicios.eventos.guardar', ['id'=>$servicio->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-11">
                <p>Ingrese los eventos aquí a medida vayan tomando lugar.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <input class="form-control" name="evento" type="text" placeholder="Descripción del evento">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2"><br>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>Descripción del evento</th>
                    <th class="text-right">Hora y Fecha</th>
                </tr>
            </thead>
            <tbody>
            @foreach($eventos as $evento)
                <tr>
                    <td>{{$evento->descripcion}}</td>
                    <td class="text-right">{{$evento->created_at->format('d/m/Y H:i:s')}}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@stop