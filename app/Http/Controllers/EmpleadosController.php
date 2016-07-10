<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmpleadosController extends Controller
{
  public function agregarEmpleado()
  {
      return view('agregarEmpleado');
  }
}
