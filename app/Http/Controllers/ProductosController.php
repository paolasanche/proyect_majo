<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use PDF;

class ProductosController extends Controller
{
    public function index()
    {

        $productos    =   Productos::all();

        //return $productos;

        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|string|max:200', 'tamano' => 'required|string|max:200',
            'descripcion' => 'required|string|max:200', 'price' => 'required|string|max:200',
            'foto' => 'required'

        ]);
        if ($request->file('foto') != '') {
            //------------Foto/Archivos/Videos-------------}
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

        return redirect()->route('productos.index') 
            ->with('success', 'producto created successfully.');
    }

    public function show(Productos $producto)
    { 
        return view('productos.show', compact('producto'));
    }

    public function edit(Productos $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Productos $producto)
    {
        $request->validate([

            'name' => 'required|string|max:200', 'tamano' => 'required|string|max:200',
            'descripcion' => 'required|string|max:200', 'price' => 'required|string|max:200'

        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    public function destroy(Productos $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }


    public function createPDF(){
        //Recuperar todos los productos de la db
        $productos = Productos::all();
        view()->share('.index', $productos);
        $pdf = PDF::loadView('index', $productos);
        return $pdf->download('archivo-pdf.pdf');
    }







}
