<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado');
    }
}
