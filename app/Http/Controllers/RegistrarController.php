<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrarController extends Controller
{
    public function index()
    {
        return view("auth.empresa");
    }
}
