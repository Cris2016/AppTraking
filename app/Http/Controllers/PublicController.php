<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Rubro;
use App\Models\Empresa;

class PublicController extends Controller
{

  public function empresas(Request $request)
  {
      $rubroSeleccionado = $request->input('rubro');
      $rubros = Rubro::all();
      $empresas = Empresa::where('rubro_id',$rubroSeleccionado)->get();

      return view('public.empresas', ['rubros'=>$rubros,'empresas'=>$empresas,'rubroSeleccionado'=>$rubroSeleccionado]);
  }


}
