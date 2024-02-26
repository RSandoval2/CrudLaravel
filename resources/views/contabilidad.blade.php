<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contabilidad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Contabilidad</h1>
        
        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-block mb-3" data-toggle="modal" data-target="#modalBancos">
                    Bancos
                </button>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-block mb-3" data-toggle="modal" data-target="#modalCatalogoCuentas">
                    Catálogo de Cuentas
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-block mb-3" data-toggle="modal" data-target="#modalCrearPartida">
                    Crear Partida
                </button>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-block mb-3" data-toggle="modal" data-target="#modalEmitirCheque">
                    Emitir Cheque
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalReportes">
                    Reportes
                </button>
            </div>
        </div>
    </div>

    <!-- Modales -->
    <!-- Agrega modales aquí -->

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
