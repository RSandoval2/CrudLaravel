<?php

use Illuminate\Support\Facades\Auth;

// Incluir el autoload de Composer
require __DIR__.'/vendor/autoload.php';

// Inicializar la aplicación de Laravel
$app = require_once __DIR__.'/bootstrap/app.php';

// Acceder al gestor de aplicaciones para obtener las configuraciones
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Verifica si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Obtiene los datos del formulario
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Intenta autenticar al usuario
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Autenticación exitosa, redirige a la página de inicio
            header("Location: inicio.php");
            exit;
        } else {
            // Credenciales incorrectas, redirige de nuevo a la página de inicio de sesión con un mensaje de error
            header("Location: login.php?error=1");
            exit;
        }
    }
}

