<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos',
        'dni',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'ingresos_mensuales',
        'ocupacion'
    ];

    public function request()
    {
        return $this->hasMany(Request::class);
    }
}
