<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Report;
use Gate;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;


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

       // dd($datos);

        return view('partner.index', ['datos' => $datos]);








    }

}
