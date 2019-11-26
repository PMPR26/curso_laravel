<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clientes', 'Api\CtrlClienteController@index');
Route::get('clientes/{cliente}/', 'Api\CtrlClienteController@show');
Route::post('clientes/', 'Api\CtrlClienteController@store');
Route::put('clientes/{cliente}/', 'Api\CtrlClienteController@update');
Route::delete('clientes/{cliente}/', 'Api\CtrlClienteController@destroy');

Route::apiResource('categorias','Api\CtrlCategoriaController');
Route::apiResource('modopagos','Api\CtrlModoPagoController');
Route::apiResource('facturas','Api\CtrlFacturaController');
Route::apiResource('productos','Api\CtrlProductoController');
Route::apiResource('detalles','Api\CtrlDetalleController');
