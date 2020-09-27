<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SectorModel;
use App\SubprogramaModel;
use App\ResponsableModel;
use App\ProductoModel;

class SeguimientoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectores = SectorModel::all();
        $subprogramas = SubprogramaModel::all();
        $responsables = ResponsableModel::all();
        $productos = ProductoModel::all();

        return view('seguimiento.index')->with(compact('sectores','subprogramas', 'responsables','productos'));
    }

    public function getProductos(Request $request)
    {
        if ($request->ajax()) {
            $productos = ProductoModel::where('IDSUBPROGRAMA', $request->subprogramaid)->get();
            foreach ($productos as $producto) {
                $productosArray[$producto->IDINDICADOR_PRODUCTO] = $producto->DESCRIPCION;
            }
           return response()->json($productosArray);

        }
    }

}
