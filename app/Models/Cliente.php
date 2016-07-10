<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }

    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio');
    }
}
