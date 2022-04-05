<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use App\Http\Requests\EmpleadosRequest;



class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Empleados::latest()->paginate(5);

        return view('empleados.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado created successfully.');
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
    public function edit(Empleados $empleado)
    {
        return view('empleados.edit', compact('empleado'));
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

        return redirect()->route('empleados.index')
            ->with('success', 'employed updated successfully');
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

        return redirect()->route('empleados.index')
            ->with('success', 'employed deleted successfully');
    }
}
