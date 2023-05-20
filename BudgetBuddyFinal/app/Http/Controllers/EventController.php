<?php

namespace App\Http\Controllers;
use App\Models\Ingreso;
use App\Models\Gasto;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $ingresos = Ingreso::select('id', 'descripcion', 'monto', 'fecha')->get();
        $gastos = Gasto::select('id', 'descripcion', 'monto', 'fecha')->get();


          // Transformar los datos combinando "descripcion" y "monto"
    $ingresosTransformados = $ingresos->map(function ($ingreso) {
        return [
            'descripcion' => $ingreso->descripcion . ' - ' . $ingreso->monto. '€',
            'fecha' => $ingreso->fecha
        ];
    });

    $gastosTransformados = $gastos->map(function ($gasto) {
        return [
            'descripcion' => $gasto->descripcion . ' - ' . $gasto->monto. '€',
            'fecha' => $gasto->fecha
        ];
    });

        return response()->json([
            'ingresos' => $ingresosTransformados,
            'gastos' => $gastosTransformados,
        ]);
    }
}
