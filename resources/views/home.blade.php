@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Panel</div>

                <div class="panel-body">
                    <p>Mis servicios en este momento:</p>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Empleado</th>
                            <th>Servicio</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($servicios as $servicio)
                        <tr>
                            <td>{{ $servicio->empleado->empresa->nombre }}</td>
                            <td>{{ $servicio->empleado->user->name }}</td>
                            <td>{{ $servicio->nombre }}</td>
                            <td><span class="label {{ $serviciosLabels[$servicio->estado->codigo] }}">{{ $servicio->estado->nombre }}</span></td>
                            <td><a href="{{ URL::route('servicios.ver', ['id'=>$servicio->id]) }}">Ver &raquo;</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
