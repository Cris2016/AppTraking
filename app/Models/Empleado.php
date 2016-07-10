<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}
