<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Alumno extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'alumnos';

    protected $fillable = [
        'nombre', 'apellido', 'edad', 'email'
    ];
}
