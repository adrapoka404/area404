<?php

use App\Http\Controllers\GastoController;
use App\Http\Controllers\GCategoriaController;
use App\Http\Controllers\Orden\OrdenController;
use App\Http\Controllers\PCategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vededores\VendedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TCategoriaController;
use App\Http\Controllers\TiendaController;
use App\Http\Livewire\Vendedor;

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
    return view('welcome');
});

// Basicos
Route::resource('tcategorias', TCategoriaController::class)->names('categorias.tiendas');
Route::resource('pcategorias', PCategoriaController::class)->names('categorias.productos');
Route::resource('gcategorias', GCategoriaController::class)->names('categorias.gastos');
Route::resource('tiendas', TiendaController::class)->names('tiendas');
Route::resource('productos', ProductoController::class)->names('productos');
// Acciones
Route::get('vendedores.vgastos', [VendedorController::class, 'vgastos'])->name('vendedores.vgastos');
Route::get('vendedores.show', [Vendedor::class, 'render'])->name('vendedores.show');
Route::post('vendedores.vgstore', [VendedorController::class, 'vgstore'])->name('vendedores.vgstore');
Route::resource('vendedores', VendedorController::class)
->only(['index', 'create','store','edit','update'])   
->names('vendedores');

Route::resource('ordenes', OrdenController::class)
    ->only(['index', 'edit'])   
    ->names('ordenes');

Route::resource('gastos', GastoController::class)->names('gastos');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



