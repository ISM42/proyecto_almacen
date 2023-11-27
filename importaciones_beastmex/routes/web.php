<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//RUTAS VISTAS 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/personas/create', 'PersonasController@create')->name('personas-tbs.create');
Route::get('/compras/create', 'ComprasController@create')->name('compras-tbs.create');
Route::get('/producto/create', 'ProductoController@create')->name('producto-tbs.create');
Route::get('/proveedor/create', 'ProveedorController@create')->name('proveedor-tbs.create');
Route::get('/ticket/create', 'TicketController@create')->name('ticket-tbs.create');
Route::get('/ventas/create', 'VentasController@create')->name('ventas-tbs.create');

//RUTAS PARA CRUD
Route::resource('personas-tb',App\Http\Controllers\PersonasTbController::class);
Route::resource('producto-tb',App\Http\Controllers\ProductoTbController::class);
Route::resource('proveedor-tb',App\Http\Controllers\ProveedorTbController::class);
Route::resource('ticket-tb',App\Http\Controllers\TicketTbController::class);
Route::resource('ventas-tb',App\Http\Controllers\VentasTbController::class);
Route::resource('compras-tb',App\Http\Controllers\ComprasTbController::class);
