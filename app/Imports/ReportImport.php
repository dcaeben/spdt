<?php

namespace App\Imports;

use App\Report;
use Maatwebsite\Excel\Concerns\ToModel;

class ReportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Report([
            'cedula' => $row[0],
            'nombre' => $row[1],
            'aportes' => $row[2],
            'revalorizaciones' => $row[3],
            'ahorros' => $row[4],
            'intereses' => $row[5],
            'ordinario' => $row[6],
            'educativo' => $row[7],
            'vivienda' => $row[8],
        ]);
    }
}



