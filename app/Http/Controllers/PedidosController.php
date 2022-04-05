<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {

        $data = Pedidos::paginate(5);

        return view('pedidos.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|string|max:200'
            , 'producto_id' => 'required|string|max:200'
            , 'cliente_id' => 'required|string|max:200'
            , 'fecha_entrega' => 'required|string|max:200'
            ]);

        Pedidos::create($request->all());

        return redirect()->route('pedidos.index')
                        ->with('success','pedido created successfully.');
    }

    public function show(Pedidos $pedido)
    {

        return view('pedidos.show',compact('pedido'));

    }

    public function edit(Pedidos $pedido)
    {
        return view('pedidos.edit',compact('pedido'));
    }

    public function update(Request $request, Pedidos $pedido)
    {
        $request->validate([

            'producto_id' => 'required|string|max:200'
            , 'cliente_id' => 'required|string|max:200'

            ]);

        $pedido->update($request->all());

        return redirect()->route('pedidos.index')
                        ->with('success','Pedido updated successfully');
    }

    public function destroy(Pedidos $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index')
                        ->with('success','pedido deleted successfully');
    }
}
