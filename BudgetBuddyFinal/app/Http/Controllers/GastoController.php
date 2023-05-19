<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $gastos = Gasto::where('usuario_id', $userId)->get();
        return response()->json($gastos);
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




        $gasto = new Gasto();
        $gasto->descripcion = $request->input('descripcion');
        $gasto->monto = -abs($request->input('monto'));
        $gasto->fecha = $request->input('fecha');

        $gasto->usuario_id = auth()->user()->id;
        $gasto->save();
        return redirect('/expenses')->with('success', 'Tarjeta agregada exitosamente');
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
    public function update(Request $request, $id)
    {
        $gasto = Gasto::find($id);
        $gasto->descripcion = $request->input('descripcion');
        $gasto->monto = -abs($request->input('monto'));
        $gasto->fecha = $request->input('fecha');
        $gasto->usuario_id = auth()->user()->id;
        $gasto->update();

        return redirect('/expenses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $gasto = Gasto::find($id);

        $gasto->delete();
        return redirect('/expenses');
    }
}
