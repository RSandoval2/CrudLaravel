div<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Solucredis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <script src="{{ asset('JavaScript/Scripts.js') }}"></script>
</head>

<body>
    <!-- Barra de navegación superior -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-coins"></i> GoCredit
            </a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fas fa-user"></i> Perfil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i> Notificaciones
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-envelope"></i> Mensajes
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Barra lateral izquierda -->
    <nav id="sidebar"> 
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="mostrarContenidoPrincipal()">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart"></i> Compras
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-dollar-sign"></i> Ventas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-box"></i> Control de Almacén
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="mostrarContabilidad()">
                        <i class="fas fa-calculator"></i> Contabilidad
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-chart-line"></i> Financiera
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users"></i> RRHH
                    </a>
                </li>
            </ul>
            
        </div>
    </nav>

    <!-- Contenido principal -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-md-4" id="content">
        <div class="container">
            <div class="row">
                <div class="container text-center">
                    <div class="row">
                      <div class="col">
                        Column
                      </div>
                      <div class="col">
                        Column
                      </div>
                      <div class="col">
                        Column
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </main>
       <!-- Contenido de  contabilidad -->
       <div id="content-contabilidad" style="display: none; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-primary mb-3">
                        <div class="card-header">Contabilidad</div>
                        <div class="card-body text-primary">
                            <p class="card-text">Catálogo de cuentas.</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalCatalogoCuentas" onclick="mostrarBancos()">IR</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-primary mb-3">
                        <div class="card-header">Crear partida</div>
                        <div class="card-body text-primary">
                            <p class="card-text">Crear partida.</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalCatalogoCuentas" onclick="">IR</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-primary mb-3">
                        <div class="card-header">Emitir cheque</div>
                        <div class="card-body text-primary">
                            <p class="card-text">Emitir cheque.</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalCatalogoCuentas" onclick="">IR</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-primary mb-3">
                        <div class="card-header">Catálogo de cuentas</div>
                        <div class="card-body text-primary">
                            <p class="card-text">Catálogo de cuentas.</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalCatalogoCuentas" onclick="">IR</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-primary mb-3">
                        <div class="card-header">Reportes</div>
                        <div class="card-body text-primary">
                            <p class="card-text">Reportes.</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalCatalogoCuentas" onclick="">IR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<!-- Botón para abrir el modal -->


<!-- Contenido de bancos -->
<div id="formulario-bancos" class="container text-center">
 aqui tengo que agregar todo el modal de bancos ,mañana
</div>



    






    <!-- Pie de página -->
    <footer class="footer">
        <div class="container">
            <span>© 2024 GoCredit. Todos los derechos reservados.</span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>