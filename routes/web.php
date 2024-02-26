<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite; // Importa la clase Socialite


Route::get('/', function () {
    return view('login ');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contabilidad', function () {
    return view('contabilidad');
})->name('contabilidad');

 
Route::get('/personas', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/personas/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/personas/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/personas/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::get('/personas/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::delete('/personas/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');



Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExists = User::where('external_id', $user->getId())->where('external_auth', 'google')->first();

    if ($userExists) {
        Auth::login($userExists);
    } else {
        $userNew = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'avatar' => $user->getAvatar(),
            'external_id' => $user->getId(),
            'external_auth' => 'google', // 'google' en lugar de $user->google
        ]);

        Auth::login($userNew);
    }

    return redirect('/'); // Redirigir a la página principal después de iniciar sesión
});

