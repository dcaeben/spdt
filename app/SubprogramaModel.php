<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubprogramaModel extends Model
{
    protected $table = 'subprograma';
    protected $fillable = [
        'IDSUBPROGRAMA','IDINDICADOR_BIENESTAR','IDCODIGO_FUT','DESCRIPCION','OBJETIVO',
    ];
}
