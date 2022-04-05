<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta as ModelsVentas;
use Darryldecode\Cart\Cart;

class ventas extends Controller
{
    public function index()
    {

        $data = ModelsVentas::paginate(5);

        return view('compras.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('ventas.create');
    }


    public function crearventa(Request $request)
    {
        dd($request);
        $request->validate([
            'name' => 'required|string|max:200', 'price' => 'required|string|max:200', 'quantity' => 'required|string|max:200'
        ]);

        ventas::create($request->all());

        /*return redirect()->route('ventas.index')
                        ->with('success','pedido created successfully.');*/
    }






    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:200', 'price' => 'required|string|max:200', 'quantity' => 'required|string|max:200'
        // ]);

        ModelsVentas::create($request->all());

        return redirect()->route('ventas.index')
                        ->with('success','pedido created successfully.');
    }









    public function show(ventas $pedido)
    {

        return view('ventas.show', compact('pedido'));
    }






    public function edit(ventas $pedido)
    {
        return view('ventas.edit', compact('pedido'));
    }










    public function update(Request $request, ventas $pedido)
    {
        $request->validate([

            'codigo_prod' => 'required|string|max:200', 'precio_prod' => 'required|string|max:200', 'quantity' => 'required|string|max:200'


        ]);

        $pedido->update($request->all());

        return redirect()->route('ventas.index')
            ->with('success', 'Venta updated successfully');
    }









    public function destroy(ventas $pedido)
    {
        $pedido->delete();

        return redirect()->route('ventas.index')
            ->with('success', 'Venta deleted successfully');
    }
}
