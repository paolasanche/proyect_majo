<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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