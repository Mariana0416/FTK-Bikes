<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ArticulosCompraController;


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
    return view('/principal/principal');
});

Route::resource('/proveedor',ProveedorController::class);
Route::resource ('/principal', PrincipalController::class);
Route::resource ('/articulo', ArticulosController::class);
Route::resource ('/cliente', ClienteController::class);
Route::resource ('/compra', CompraController::class);
Route::resource ('/articuloscompra', ArticulosCompraController::class);

