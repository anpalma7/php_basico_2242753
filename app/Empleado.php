<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;

    // 1:m a compras
    public function compras()
    {
        return $this->hasManyThrough(
            'App\Compra',
            'App\Cliente',
            'SupportRepId',
            'CustomerId',
            'EmployeeId',
            'CustomerId'
        );
    }

    public function clientes()
    {
        // Hasmany: Parámetros 
        // 1. Modelo a relacionar
        // 2. FK del artista (Papá) en los discos (Hijo). 
        return $this->hasMany('App\Cliente', 'SupportRepId');
    }
}
