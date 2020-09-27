<?php

namespace App\Services;

use App\SubprogramaModel;

class Programas
{
    public function get()
    {
    $programas = SubprogramaModel::get();
    $programasArray[''] = 'Selecciona un Subprograma';
    foreach ($programas as $programa) {
        $programasArray[$programa->IDSUBPROGRAMA] = $programa->DESCRIPCION;

    }
    return $programasArray;


}
}
