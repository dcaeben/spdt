<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    protected $table = 'indicador_producto';
    protected $fillable = [
        'IDINDICADOR_PRODUCTO','IDSUBPROGRAMA','IDTIPO_INDICADOR','IDUNIDAD_MEDIDA','DESCRIPCION','META_CUATRIENIO','PRESUPUESTO','ACTIVIDADES','LINEA_BASE',
    ];
}
