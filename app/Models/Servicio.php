<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    const labels = [
        'pendiente' => 'label-warning',
        'en_proceso' => 'label-info',
        'completado' => 'label-success',
    ];

    public function estado()
    {
        return $this->belongsTo('App\Models\Estado');
    }

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function eventos()
    {
        return $this->hasMany('App\Models\Evento');
    }
}
