<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Ingreso;
use App\Models\Gasto;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function getIngresosEvents()
    {    $userId = Auth::id();
        $ingresos =  Ingreso::where('usuario_id', $userId)->get();

        $ingresosTransformados = $ingresos->map(function ($ingreso) {
            return [
                'descripcion' => $ingreso->descripcion . '  ' . $ingreso->monto. '€',
                'fecha' => $ingreso->fecha
            ];
        });

        return response()->json($ingresosTransformados);
    }

    public function getGastosEvents()
    {    $userId = Auth::id();
        $gastos = Gasto::where('usuario_id', $userId)->get();
        $gastosTransformados = $gastos->map(function ($gasto) {
            return [
                'descripcion' => $gasto->descripcion . '  ' . $gasto->monto. '€',
                'fecha' => $gasto->fecha
            ];
        });
        return response()->json($gastosTransformados);
    }
}
