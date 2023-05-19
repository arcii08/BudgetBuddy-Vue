<?php

namespace App\Http\Controllers;

use App\Models\CuentaBancaria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CuentaBancariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Implementar la lógica para mostrar una lista de cuentas bancarias
        $userId = Auth::id();
        $cuentaBancaria = CuentaBancaria::where('usuario_id', $userId)->get();
        return response()->json($cuentaBancaria);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Implementar la lógica para mostrar el formulario de creación de cuentas bancarias
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_titular' => 'required',
            'banco' => 'required',
            'tipo_cuenta' => 'required',
            'numero_cuenta' => 'required',
        ], [
            'nombre_titular.required' => 'El nombre del titular es obligatorio.',
            'banco.required' => 'El banco es obligatorio.',
            'tipo_cuenta.required' => 'El tipo de cuenta es obligatorio.',
            'numero_cuenta.required' => 'El número de cuenta es obligatorio.',
        ]);

        $numeroCuentaInput = $request->input('numero_cuenta');

        // Verifica si la cuenta ya existe en la tabla
        $cuentaExistente = CuentaBancaria::where('numero_cuenta', $numeroCuentaInput)->first();

        if (!$cuentaExistente) {
            $cuentaBancaria = new CuentaBancaria();
            $cuentaBancaria->nombre_titular = $request->input('nombre_titular');
            $cuentaBancaria->banco = $request->input('banco');
            $cuentaBancaria->tipo_cuenta = $request->input('tipo_cuenta');
            $cuentaBancaria->numero_cuenta = $numeroCuentaInput;
            $cuentaBancaria->monto = $request->input('monto');
            $cuentaBancaria->usuario_id = auth()->user()->id;
            $cuentaBancaria->save();
            return redirect()->route('cuentas-bancarias')->with('success', 'Cuenta agregada correctamente.');
        }

        return redirect()->route('cuentas-bancarias')->with('success', 'Cuenta ya existente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implementar la lógica para mostrar los detalles de una cuenta bancaria específica
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Implementar la lógica para mostrar el formulario de edición de una cuenta bancaria específica
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implementar la lógica para actualizar una cuenta bancaria específica
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Implementar la lógica para eliminar una cuenta bancaria específica
    }
}
