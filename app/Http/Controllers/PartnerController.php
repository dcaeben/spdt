<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Report;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;


class PartnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cedulaUser = Auth::user()->cedula;

        $datos = Report::where('cedula', '=', $cedulaUser)->get();


        return view('partner.index', ['datos' => $datos]);

    }

    public function exportPdf()
    {
        $cedulaUser = Auth::user()->cedula;

        $datos = Report::where('cedula', '=', $cedulaUser)->get();

        $pdf = PDF::loadView('pdf.reporte',  ['datos' => $datos]);

        return $pdf->download('reporte.pdf');
    }

}
