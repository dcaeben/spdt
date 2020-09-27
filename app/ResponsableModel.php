<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponsableModel extends Model
{
    protected $table = 'responsable_programa';
    protected $fillable = [
        'IDRESPONSABLE_PROGRAMA','IDGOBIERNO','NOMBRE','APELLIDO',
    ];
}
