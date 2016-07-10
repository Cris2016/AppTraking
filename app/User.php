<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userable()
    {
        return $this->morphTo();
    }

    public function esCliente()
    {
        return $this->userable_type === \App\Models\Cliente::class;
    }

    public function esEmpleado()
    {
        return $this->userable_type === \App\Models\Empleado::class;
    }
}
