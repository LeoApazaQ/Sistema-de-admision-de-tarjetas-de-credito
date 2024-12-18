<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

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
    public function applications()
    {
        return $this->hasMany(Application::class, 'id', 'client_id');
    }
}
