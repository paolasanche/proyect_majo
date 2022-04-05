<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Venta;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
   





    public function index()
    {
        $data = Venta::paginate(5);
    
        return view('compras.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    







    public function create()
    {
        return view('compras.create');
    }

  
    






    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200'
            , 'price' => 'required|string|max:200'
            , 'quantity' => 'required|string|max:200'
             ]);

    
        Compras::create($request->all());
     
        return redirect()->route('ventas.index')
                        ->with('success','Post created successfully.');
    }

    
    








    public function show(Compras $compra)
    {
        return view('compras.show',compact('compra'));
    }

   
    






    public function edit(Compras $compra)
    {
        return view('compras.edit',compact('compra'));
    }

   
    




    public function update(Request $request, Compras $compra)
    {
        $request->validate([
            'pedido_id' => 'required|string|max:200'
            , 'producto_id' => 'required|string|max:200'
            , 'cliente_id' => 'required|string|max:200'
            , 'estado_compra' => 'required|string|max:200'
             ]);
    
        $compra->update($request->all());
    
        return redirect()->route('compras.index')
                        ->with('success','compra updated successfully');
    }

    








    public function destroy(Compras $compra)
    {
        $compra->delete();
    
        return redirect()->route('compras.index')
                        ->with('success','compra deleted successfully');
    }
}
