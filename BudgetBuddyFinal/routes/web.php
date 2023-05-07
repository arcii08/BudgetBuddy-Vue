<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about-us', function () {
    return Inertia::render('About', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/contact', function(){
    return Inertia::render('Contact');
});
Route::get('/blog', function(){
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
            'name'=>$user->name,
            'email'=>$user->email,
            'avatar'=>$user->avatar,
            'external_id'=>$user->id,
            'external_auth'=>'google'
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

require __DIR__.'/auth.php';
