<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroPersonaWebController;
use App\Http\Controllers\RegistroProductoWebController;
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

Route::get('/nueva-ruta', function () {
    return view('vistaDos');
});

//--------------------------------------------
//ruta listar personas
Route::get('/lista-personas',
 [PersonaController::class, 'listarPersona']
)->name('lista-personas');

Route::get('/lista-personas/{id_persona}',
[PersonaController::class, 'mostrarPersona']
)->name('mostrar-personas');
//--------------------------------------------

//ruta listar productos
Route::get('/lista-productos',
 [ProductoController::class, 'listarProducto']
)->name('lista-productos');

Route::get('/lista-productos/{id_producto}',
[ProductoController::class, 'mostrarProducto']
)->name('mostrar-productos');

//------------------------------------------------------------------------------
//Pagina web
Route::get('/pagina-web',
[PaginaWebController::class, 'verPaginaWeb']
)->name('pagina-web');

Route::get('/pagina-web/registro-persona',
[RegistroPersonaWebController::class, 'registroPersona']
)->name('registro.persona');

Route::get('/pagina-web/registro-producto',
[RegistroProductoWebController::class, 'registroProducto']
)->name('registro.producto');



//------------------------------------------------------------------------------