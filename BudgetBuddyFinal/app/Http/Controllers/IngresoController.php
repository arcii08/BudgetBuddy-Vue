<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $ingresos = Ingreso::where('usuario_id', $userId)->get();
        return response()->json($ingresos);
        // $ingresos = Ingreso::with('user')->get();
        // return inertia('Ingresos/Index', compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
            'monto' => 'required',
            'fecha' => 'required',

        ], [
            'descripcion.required' => 'El nombre del titular es obligatorio.',
            'monto.required' => 'El número de tarjeta es obligatorio.',
            'fecha.required' => 'La fecha de expiración es obligatoria.',

        ]);

        $ingreso = new Ingreso();
        $ingreso->descripcion = $request->input('descripcion');
        $ingreso->monto = $request->input('monto');
        $ingreso->fecha = $request->input('fecha');

        $ingreso->usuario_id = auth()->user()->id;
        $ingreso->save();
        return redirect('/incomes')->with('success', 'Tarjeta agregada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        $ingreso->update($request->all());

        return redirect()->route('ingresos.index')
            ->with('success', 'Ingreso actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $ingreso = Ingreso::find($id);

        $ingreso->delete();
        return redirect('/incomes');
    }
}
