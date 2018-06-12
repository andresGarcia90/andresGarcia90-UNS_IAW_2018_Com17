<?php

namespace proyectoIaw;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Alumno extends Eloquent
{
    protected $connection = 'mongodb';
}
