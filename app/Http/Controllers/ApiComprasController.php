<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Venta;


class ApiComprasController extends Controller
{
    
    public function index()
    {
        $compra = Compras::all();

        return response()->json([ 'data' => $compra], 200);
    }

    public function create()
    {
        return view('compras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200', 'price' => 'required|string|max:200', 'quantity' => 'required|string|max:200'
        ]);


        Compras::create($request->all());

        return response()->json([ 'data' => $compra], 200);
    }


    public function show($compra)
    {

        $compra = Compras::find($compra);

        return response()->json([ 'data' => $compra], 200);
    }


    public function edit($compra)
    {

        $compra = Compras::find($compra);

        return response()->json([ 'data' => $compra], 200);

    }


    public function update(Request $request, $compra)
    {



        $request->validate([
            'pedido_id' => 'required|string|max:200', 'producto_id' => 'required|string|max:200', 'cliente_id' => 'required|string|max:200', 'estado_compra' => 'required|string|max:200'
        ]);

        $compra = Compras::find($compra);

        $compra->update($request->all());

        return response()->json([ 'message'    => ' compra actualizada '], 200);
    }

    public function destroy($compra)
    {

        $compra = Compras::find($compra);
        $compra->delete();

        return response()->json([ 'message'    => ' compra creadaq correctamente.'], 200);
    }
}
