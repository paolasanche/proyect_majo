<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Http\Requests\EmpleadosRequest;

class ApiController extends Controller
{
    
    public function index()
    {
        $empleados = Empleados::all();

        return response()->json([ 'data' => $empleados], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([

            'nombre_empleado' => 'required|string|max:200', 'edad_empleado' => 'required|string|max:200', 'telefono_empleado' => 'required|string|max:200', 'correo_empleado' => 'required|string|max:200', 'puesto_empleado' => 'required|string|max:200'

        ]);
        Empleados::create($request->all());

        return response()->json([ 'message'    => 'Empleado creado correctamente.'], 200);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit( $empleado)
    {
        $empleado = Empleados::find($empleado);

        return response()->json([ 'data' => $empleado], 200);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadosRequest $request, Empleados $empleado)
    {
        $empleado->update($request->validated());

        return response()->json([ 'data'    => 'Empleado actualizado correctamente.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $empleado)
    {
        $empleado->delete();

        return response()->json([ 'data'    => 'Empleado eliminado correctamente.'], 200);
    }


}
