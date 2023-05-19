<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use App\Models\Tarjeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class TarjetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_titular' => 'required',
            'numero' => 'required',
            'fecha_expiracion' => 'required',
            'cvc' => 'required',
        ], [
            'nombre_titular.required' => 'El nombre del titular es obligatorio.',
            'numero.required' => 'El número de tarjeta es obligatorio.',
            'fecha_expiracion.required' => 'La fecha de expiración es obligatoria.',
            'cvc.required' => 'El código CVC es obligatorio.',
        ]);

        $numeroTarjeta = $request->input('numero');

        // Verificar si la tarjeta ya existe en la tabla
        $tarjeta = Tarjeta::where('numero', $numeroTarjeta)->first();

        if (!$tarjeta) {
            // La tarjeta no existe, crear una nueva
            $tarjeta = new Tarjeta();
            $tarjeta->nombre_titular = $request->input('nombre_titular');
            $tarjeta->numero = Hash::make($numeroTarjeta);
            $tarjeta->fecha_expiracion = Hash::make($request->input('fecha_expiracion'));
            $tarjeta->cvc = Hash::make($request->input('cvc'));
            $tarjeta->monto = Ingreso::sum('monto');
            $tarjeta->usuario_id = auth()->user()->id;
            $tarjeta->save();
            return redirect('/my-cards')->with('success', 'Tarjeta agregada exitosamente');
        }

        // La tarjeta ya existe, puedes manejar el caso en consecuencia
        return redirect('/my-cards')->with('error', 'La tarjeta ya existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarjeta = Tarjeta::find($id);
        return view('/my-cards', [
            'tarjeta' => $tarjeta
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tarjeta = Tarjeta::find($id);
        return view('tarjetas-edit', [
            'tarjeta' => $tarjeta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tarjeta = Tarjeta::find($id);
        $tarjeta->nombre_titular = $request->nombre_titular;
        $tarjeta->numero = $request->numero;
        $tarjeta->fecha_expiracion = $request->fecha_expiracion;
        $tarjeta->monto = Ingreso::sum('monto');
        $tarjeta->cvc = $request->cvc;
        $tarjeta->update();
        return redirect()->route('/my-cards');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarjeta = Tarjeta::find($id);
        $tarjeta->delete();
        return redirect('/my-cards');
    }
}
