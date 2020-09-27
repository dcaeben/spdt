<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

//Rutas para simulacion

Route::get('/registrado', function () {
    return view('usuario/index');
});



Route::get('/planilla', function () {
    return view('asociados/planillames');
});

Route::get('/saldos', function () {
    return view('asociados/saldosabonos');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Rustas Asociado
Route::get('/asociado', 'PartnerController@index')->name('partner');

Route::get('reporte-list-pdf', 'PartnerController@exportPdf')->name('reporte.pdf');


//Ruta de Administracion Usuarios


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

//Ruta de Administracion Cargar Base de Datos

Route::get('/cargardatos', 'ReportController@index')->name('report');
Route::post('import-list-excel', 'ReportController@importExcel')->name('report.excel');
Route::get('/seguimiento', 'SeguimientoController@index')->name('seguimiento');
Route::get('/reporte', 'ReporteController@index')->name('reporte');
Route::get('/gestion', 'GestionController@index')->name('gestion');

//Rutas consultas seguimiento ajax
Route::get('/productos', 'SeguimientoController@getProductos');
