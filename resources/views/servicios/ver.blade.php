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
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table"    >
            @foreach($eventos as $evento)
                <tr>
                    <td>{{$evento->descripcion}}</td>
                    <td>{{$evento->created_at->format('d/m/Y H:i:s')}}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@stop