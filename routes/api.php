<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiComprasController;
use App\Http\Controllers\ApiProductsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/empleados', [ApiController::class, 'index']);

Route::get('/empleados/{id}/edit', [ApiController::class, 'edit']);

Route::post('/empleados', [ApiController::class, 'store'])->name('empleados.store');

Route::put('/empleados/{id}', [ApiController::class, 'update'])->name('empleados.update');

Route::delete('/empleados/{id}', [ApiController::class, 'destroy'])->name('empleados.destroy');


Route::get('/productos', [ApiProductsController::class, 'index']);

Route::get('/productos/{id}/edit', [ApiProductsController::class, 'edit']);

Route::get('/productos/{id}/show', [ApiProductsController::class, 'show']);

Route::post('/productos', [ApiProductsController::class, 'store'])->name('productos.store');

Route::put('/productos/{id}', [ApiProductsController::class, 'update'])->name('productos.update');

Route::delete('/productos/{id}', [ApiProductsController::class, 'destroy'])->name('productos.destroy');


Route::get('/compras', [ApiComprasController::class, 'index']);

Route::get('/compras/{id}/edit', [ApiComprasController::class, 'edit']);

Route::get('/compras/{id}/show', [ApiComprasController::class, 'show']);

Route::post('/compras', [ApiComprasController::class, 'store'])->name('compras.store');

Route::put('/compras/{id}', [ApiComprasController::class, 'update'])->name('compras.update');

Route::delete('/compras/{id}', [ApiComprasController::class, 'destroy'])->name('compras.destroy');

