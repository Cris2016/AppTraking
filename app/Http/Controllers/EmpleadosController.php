<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Servicio;
use App\Models\Evento;

class EmpleadosController extends Controller
{
    public function agregarEmpleado()
    {
        return view('agregarEmpleado');
    }

    public function guardarEvento(Request $request, $id)
    {
        $servicio = Servicio::find($id);

        $evento = new Evento;
        $evento->descripcion = $request->input('evento');

        $servicio->eventos()->save($evento);

        return redirect()->route('servicios.ver', ['id'=>$id]);
    }
}
