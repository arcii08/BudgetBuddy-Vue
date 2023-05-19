<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\CuentaBancariaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', function () {
    if (auth()->check()) {
        return Inertia::render('Dashboard');
    } else {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }
});

Route::post('/guardar-datos', [CuentaBancariaController::class, 'store'])->name('guardar-datos');
// Ingresos
Route::get('/ingresos-json', [IngresoController::class, 'index'])->name('ingresos.index');

Route::get('/incomes/{ingreso}', [IngresoController::class, 'show'])->name('ingresos.show');
Route::post('/incomes/add-income', [IngresoController::class, 'store'])->name('ingresos.store');
Route::put('/incomes-update/{id}', [IngresoController::class, 'update'])->name('ingresos.update');
Route::get('/incomes-destroy/{id}', [IngresoController::class, 'destroy'])->name('ingresos.destroy');

// Route::get('/formulario-cb', function(){
//     return Inertia::render('FormularioCB');
// })->middleware(['auth', 'verified'])->name('formulario-cb');

Route::get('/RegisterCuenta', function () {
    return Inertia::render('RegisterCuenta');
})->middleware(['auth', 'verified'])->name('registercuenta');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/expenses', function () {
    return Inertia::render('Expenses');
})->middleware(['auth', 'verified'])->name('expenses');


Route::get('/incomes', function () {
    return Inertia::render('Incomes');
})->middleware(['auth', 'verified'])->name('incomes');

// Route::get('/my-cards', [TarjetaController::class, 'index'])->name('tarjetas.index')->middleware('auth')->inertia('MyCards');
// Route::get('/my-cards', [TarjetaController::class, 'index'])->name('tarjetas.index');


// RUTA PARA OBTENER EL JSON

// Route::get('/my-cards', function () {
//     $user = Auth::user();
//     $tarjetas = Tarjeta::where('usuario_id', $user->id)->get();
//     // $tarjetas = Tarjeta::all();
//     return Inertia::render('MyCards', ['tarjeta' => $tarjetas]);
// })->middleware(['auth', 'verified'])->name('my-cards');

// RUTAS DE TARJETAS
// Route::get('/my-cards', [TarjetaController::class, 'index'])->name('tarjetas.index')->middleware('auth')->inertia('MyCards');


// Esto me devuelve un json
Route::get('/tarjetas-json', [TarjetaController::class, 'index'])->name('tarjetas.index');

Route::get('/cuentas-json', [CuentaBancariaController::class, 'index'])->name('cuentas.index');

Route::get('/cuentas-bancarias', function () {
    return Inertia::render('BankAccounts');
})->middleware(['auth', 'verified'])->name('cuentas-bancarias');

Route::get('/my-cards', function () {
    return Inertia::render('MyCards');
})->middleware(['auth', 'verified'])->name('my-cards');


Route::post('/my-cards/add-card', [TarjetaController::class, 'store'])->name('tarjetas.store');

// Eliminar tarjetas
Route::get('/my-cards/destroy/{id}', [TarjetaController::class, 'destroy'])->name('tarjetas-destroy');

// Route::get('/my-cards/edit/{id}', [TarjetaController::class, 'update'])->name('tarjetas-edit');


// PRUEBAS
// Route::get('/tarjetas', [TarjetaController::class, 'index']);
// Route::get('/pruebas', function () {
//     return Inertia::render('Tarjeta');
// })->middleware(['auth', 'verified'])->name('tarjeta-todas');


// END PRUEBAS
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// RUTAS DEL LANDING PAGE
Route::get('/about-us', function () {
    return Inertia::render('About', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/contact', function () {
    return Inertia::render('Contact');
});
Route::get('/blog', function () {
    return Inertia::render('Blog');
});

// AUTHENTICATION USING LARAVEL SOCIALITE
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    // dd($user);
    // Usamos el campo id que acabamos de crear
    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
    // Consulta a la base de datos para buscar un registro en la tabla "User" que tenga un valor "external_id" igual a $user->id y un valor "external_auth" igual a "google"

    // "first" se utiliza para obtener el primer registro que cumpla con las condiciones

    // Si un registro coincide con los valores proporcionados, se almacenará en la variable "$userExists"

    if ($userExists) {
        // Si existe el usuario, hacemos login
        Auth::login($userExists);
        # code...
    } else {
        // Si no, creamos el usuario
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google'
        ]);
        Auth::login($userNew);
    }
    return redirect('/dashboard');
    // $user->token
});

// GITHUB
Route::get('/login-github', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/github-callback', function () {
    $user = Socialite::driver('github')->user();
    $userExists = User::where('external_id', $user->id)->where('external_auth', 'github')->first();

    if ($userExists) {
        // Si existe el usuario, hacemos login
        Auth::login($userExists);
        # code...
    } else {
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'github'
        ]);
        Auth::login($userNew);
    }

    // dd($user);

    // $user->token
    return redirect('/dashboard');
});

require __DIR__ . '/auth.php';
