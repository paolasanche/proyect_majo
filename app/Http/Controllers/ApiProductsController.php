<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ApiProductsController extends Controller
{
    
    public function index() {

        $productos    =   Productos::all();

        //return $productos;

        return response()->json([ 'data' => $productos], 200);
    }

    public function store(Request $request) {

        $request->validate([

            'name' => 'required|string|max:200', 'tamano' => 'required|string|max:200',
            'descripcion' => 'required|string|max:200', 'price' => 'required|string|max:200',
            'foto' => 'required'

        ]);
        
        if ($request->file('foto') != '') {
            //------------Foto/Archivos/Videos-------------
            $file = $request->file('foto');
            $foto = $file->getClientOriginalName();
            //$foto = $request->$file('foto')->getClientOriginalName();
            $date = date('Ymd_His_');
            $foto2 = $date . $foto;
            \Storage::disk('local')->put($foto2, \File::get($file));
        } else {
            $foto2 = "shadown.png";
        }



        Productos::create($request->all());

        return response()->json([ 'message'    => ' producto creado correctamente.'], 200);
    }


    public function show($producto)
    { 
        $producto = Productos::find($producto);

        return response()->json([ 'data' => $producto], 200);
    }

    public function edit($producto)
    {
        $producto = Productos::find($producto);
    
        return response()->json([ 'data' => $producto], 200);
    }

    public function update(Request $request, $producto)
    {
        $request->validate([

            'name' => 'required|string|max:200', 'tamano' => 'required|string|max:200',
            'descripcion' => 'required|string|max:200', 'price' => 'required|string|max:200'

        ]);
        $producto = Productos::find($producto);

        $producto->update($request->all());

        return response()->json([ 'message'    => ' producto actualizado correctamente.'], 200);
    }

    public function destroy( $producto)
    {
        $producto = Productos::find($producto);
        $producto->delete();

        return response()->json([ 'message'    => 'producto eliminado correctamente.'], 200);
    }








}
