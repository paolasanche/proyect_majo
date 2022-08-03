<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ventas;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use App\Exports\ClientesExport; 
use App\Exports\EmpleadosExport; 
use App\Exports\VentasExport; 






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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');






Route::name('dashboard')->get('/dashboard', function () { return view('dashboard'); });

Route::name('clientescreate')->get('/clientescreate', function () { return view('clientes.create'); })->middleware(['auth', 'admin']);

Route::name('empleadoscreate')->get('/empleadoscreate', function () { return view('empleados.create'); })->middleware(['auth', 'admin']);


Route::name('productoscreate')->get('/productoscreate', function () { return view('productos.create'); })->middleware(['auth', 'admin']);




Route::name('pedidoscreate')->get('/pedidoscreate', function () { return view('pedidos.create'); })->middleware(['auth', 'admin']);

Route::name('comprascreate')->get('/comprascreate', function () { return view('compras.create'); })->middleware(['auth', 'admin']);
Route::name('comprasindex')->get('/comprasindex', function () { return view('compras.index'); })->middleware(['auth', 'admin']);

///controladores///////

Route::resource('clientes', ClientesController::class)->middleware(['auth', 'admin']);

Route::resource('empleados', EmpleadosController::class)->middleware(['auth', 'admin']);

Route::resource('productos', ProductosController::class);

Route::resource('pedidos', PedidosController::class)->middleware(['auth', 'admin']);

Route::resource('compras', ComprasController::class)->middleware(['auth', 'admin']);

Route::resource('crearventa', ventas::class);








Route::resource('/cart', 'CartController');

Route::post('/cart-add',    'App\Http\Controllers\CartController@add')->name('cart.add');

Route::get('/cart-checkout','App\Http\Controllers\CartController@cart')->name('cart.checkout');

Route::post('/cart-clear',  'App\Http\Controllers\CartController@clear')->name('cart.clear');

Route::post('/cart-removeitem',  'App\Http\Controllers\CartController@removeitem')->name('cart.removeitem');





Route::resource('ventas', ventas::class);
Route::name('crearventa')->get('/crearventa', function () { return view('checkout'); });

/////////////////EXCEL//PDF////////////////////////////////




///PRODUCTOS//////////////
Route::get('/excelproductos', function () {
    return Excel::download(new ProductsExport, 'products.xlsx');
});

Route::get('/pdfproductos', function () {
    return Excel::download(new ProductsExport, 'products.pdf');
});


///////////CLIENTES////////////////////    //////

Route::get('/excelclientes', function () {
    return Excel::download(new ClientesExport, 'clientes.xlsx');
});

Route::get('/pdfclientes', function () { 
    return Excel::download(new ClientesExport, 'clientes.pdf');
});

////////////////////EMPLEADOS////////////////////////////

Route::get('/excelempleados', function () {
    return Excel::download(new EmpleadosExport, 'empleados.xlsx');
});

Route::get('/pdfempleados', function () {
    return Excel::download(new EmpleadosExport, 'empleados.pdf');
});

//////VENTAS//////////////////////

Route::get('/excelventas', function () {
    return Excel::download(new VentasExport, 'ventas.xlsx');
});

Route::get('/pdfventas', function () {
    return Excel::download(new VentasExport, 'ventas.pdf');
});














