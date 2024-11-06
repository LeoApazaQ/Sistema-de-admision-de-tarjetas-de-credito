<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $perPage = 20;

    protected $fillable =
    [
        'nombres',
        'apellidos',
        'dni',
        'fecha_nacimiento',
        'direccion',
        'telefono',
        'ingresos_mensuales',
        'ocupacion'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requests()
    {
        return $this->hasMany(Request::class, 'id', 'client_id');
    }
}
