@extends('layouts.app')

@section('content')
<div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-6">
            <h1 class="text-center">Empresas</h1>
            <hr>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="sponsor">
              <script async type="text/javascript" src="" id="_carbonads_js"></script>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-4">
              <div class="panel panel-default">
                  <div class="panel-heading">Rubros</div>
                  <div class="list-group table-of-contents">
                    @foreach($rubros as $r)
                    <a class="list-group-item {{ $r->id == $rubroSeleccionado ? 'active' : '' }}" href="{{url('/empresas?rubro='.$r->id)}}">{{$r->name}}</a>
                    @endforeach
                  </div>
              </div>

          </div>

          <div class="col-lg-9 col-md-9 col-sm-8">
            <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Telefono</th>
          </tr>
        </thead>
        <tbody>
          @foreach($empresas as $r)
          <tr class="">
            <td>{{$r->nombre}}</td>
            <td>{{$r->direccion}}</td>
            <td>{{$r->telefono}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
            </div>
        </div>
      </div>
@endsection
