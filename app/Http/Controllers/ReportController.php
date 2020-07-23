<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Gate;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ReportImport;



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



    public function importExcel(Request $request)
    {

        Report::query()->truncate();
        $file = $request->file('file');
        Excel::import(new ReportImport, $file);

        return back()->with('message', 'Importacion de datos Completada');

    }


}
