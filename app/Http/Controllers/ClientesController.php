<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesRequest;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{








    public function index()
    {
        $data = Clientes::latest()->paginate(5);
    
        return view('clientes.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
    





    public function create()
    {
        return view('clientes.create');
    }

  
    




    public function store(ClientesRequest $request)
    {    
        Clientes::create($request->validated());
     
        return redirect()->route('clientes.index')
                        ->with('success','Client created successfully.');
    }












    public function show(Clientes $cliente)
    {
        return view('clientes.show',compact('cliente'));
    }


    




    public function edit(Clientes $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

   
    





    public function update(ClientesRequest $request, Clientes $cliente)
    {    
        $cliente->update($request->validated());
    
        return redirect()->route('clientes.index')
                        ->with('success','client updated successfully');
    }










    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
    
        return redirect()->route('clientes.index')
                        ->with('success','Client deleted successfully');
    }

    

}
