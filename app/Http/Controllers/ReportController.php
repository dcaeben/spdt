<?php

namespace App\Http\Controllers;

use App\Report;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ReportImport;
use App\Http\Requests\ReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('report.index');
    }



    public function importExcel(ReportRequest $request)
    {

        Report::query()->truncate();
        $file = $request->file('file');
        Excel::import(new ReportImport, $file);

        return back()->with('message', 'Importacion de datos Completada');

    }


}
