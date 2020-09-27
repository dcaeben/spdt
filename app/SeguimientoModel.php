<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeguimientoModel extends Model
{
    protected $table = 'seguimiento';
    protected $fillable = [
        'IDSEGUIMIENTO','IDINDICADOR_PRODUCTO','DESCRIPCION','FECHA','FECHA_SISTEMA','IDUSUARIO',
    ];
}
