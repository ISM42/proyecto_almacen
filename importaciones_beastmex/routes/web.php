<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasTbController;
use App\Http\Controllers\ComprasTbController;
use App\Http\Controllers\ProductoTbController;
use App\Http\Controllers\ProveedorTbController;
use App\Http\Controllers\TicketTbController;
use App\Http\Controllers\VentasTbController;



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


Route::get('/personas/create', [PersonasTbController::class, 'create'])->name('personas-tbs.create');
Route::get('/compras/create', [ComprasTbController::class,'create'])->name('compras-tbs.create');
Route::get('/producto/create', [ProductoTbController::class,'create'])->name('producto-tbs.create');
Route::get('/proveedor/create', [ProveedorTbController::class,'create'])->name('proveedor-tbs.create');
Route::get('/ticket/create', [TicketTbController::class,'create'])->name('ticket-tbs.create');
Route::get('/ventas/create', [VentasTbController::class,'create'])->name('ventas-tbs.create');

//RUTAS PARA MÉTODO STORE
Route::post('/personas', [PersonasTbController::class, 'store'])->name('personas-tbs.store');
Route::post('/compras', [ComprasTbController::class, 'store'])->name('compras-tbs.store');
Route::post('/producto', [ProductoTbController::class, 'store'])->name('producto-tbs.store');
Route::post('/proveedor', [ProveedorTbController::class, 'store'])->name('proveedor-tbs.store');
Route::post('/ticket', [TicketTbController::class, 'store'])->name('ticket-tbs.store');
Route::post('/ventas', [VentasTbController::class, 'store'])->name('ventas-tbs.store');



//RUTAS PARA CRUD
Route::resource('personas-tb',App\Http\Controllers\PersonasTbController::class);
Route::resource('producto-tb',App\Http\Controllers\ProductoTbController::class);
Route::resource('proveedor-tb',App\Http\Controllers\ProveedorTbController::class);
Route::resource('ticket-tb',App\Http\Controllers\TicketTbController::class);
Route::resource('ventas-tb',App\Http\Controllers\VentasTbController::class);
Route::resource('compras-tb',App\Http\Controllers\ComprasTbController::class);
