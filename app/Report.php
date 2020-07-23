<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'cedula','nombre','aportes','revalorizaciones','ahorros','intereses','ordinario','educativo','vivienda','created_at',
    ];
}

