<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Servicio;
use App\Models\Evento;
use App\Models\Estado;

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

    public function crearServicio()
    {
        return view('servicios.crear');
    }

    public function guardarServicio(Request $request)
    {
        $servicio = new Servicio;
        $servicio->cliente_id = $request->input('cliente');
        $servicio->nombre = $request->input('nombre');
        $servicio->descripcion = $request->input('descripcion');
        $servicio->empleado_id = \Auth::user()->userable_id;
        $servicio->estado_id = Estado::where('codigo', 'pendiente')->first()->id;

        $servicio->save();

        return redirect('/home');
    }

    public function cambiarEstado($id, $estado)
    {
        $servicio = Servicio::find($id);

        $servicio->estado_id = $estado;
        $servicio->save();

        $e = Estado::find($estado);
        $evento = new Evento;
        if($e->codigo == 'en_proceso')
        {
            $evento->descripcion = 'Inicio del proceso.';
        }
        elseif($e->codigo == 'completado')
        {
            $evento->descripcion = 'Fin del proceso.';
        }
        $servicio->eventos()->save($evento);

        return redirect()->route('servicios.ver', ['id'=>$id]);
    }
}
