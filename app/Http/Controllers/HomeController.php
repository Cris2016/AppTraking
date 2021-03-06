<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Servicio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = \Auth::user()->userable->servicios;

        $data = [
            'servicios' => $servicios,
            'serviciosLabels' => Servicio::labels,
        ];
        return view('home', $data);
    }
    public function quienesSomos()
    {
        return view('quienesSomos');
    }
}
