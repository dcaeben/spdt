<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectorModel extends Model
{
    protected $table = 'sector';
    protected $fillable = [
        'IDSECTOR','IDODS','IDPILAR_PDET','IDEJECERS','IDLINEA_ESTRATEGICA','DESCRIPCION','OBEJTIVO',
    ];
}
