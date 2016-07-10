<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rubro;
use App\Http\Requests;

class RegistrarController extends Controller
{
    public function index()
    {
        $rubros = Rubro::all();

        return view("auth.empresa", ['rubros'=>$rubros]);
    }
}
