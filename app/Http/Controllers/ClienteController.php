<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Servicio;

class ClienteController extends Controller
{
    public function verServicio($id)
    {
        $servicio = \Auth::user()->userable->servicios->find($id);
        $labels = Servicio::labels;
        $eventos = $servicio->eventos->sortBy('created_at');

        return view('servicios.ver', compact('servicio', 'labels', 'eventos'));
    }
}
