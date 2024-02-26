<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Solucredis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9; /* Azul claro */
            margin: 0;
            padding: 0;
        }
        #sidebar {
            background-color: #343a40; /* Color gris oscuro */
            color: #fff;
            padding-top: 20px;
            padding-bottom: 20px;
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0; /* Ajuste para ocupar todo el espacio vertical */
            left: 0;
            transition: width 0.3s;
            overflow-y: auto;
            z-index: 1000; /* Ajuste el índice z para superponerse */
        }
        #sidebar .nav-link {
            color: #fff;
        }
        #content {
            padding: 20px;
            margin-left: 250px;
            margin-top: 60px; /* Ajuste del margen superior para dejar espacio para la barra superior */
            margin-bottom: 120px; /* Ajuste del margen inferior para dejar espacio para el pie de página */
        }
        footer.footer {
            background-color: #343a40; /* Color gris oscuro */
            color: #fff;
            position: fixed; /* Fijamos el pie de página en la parte inferior */
            bottom: 0;
            width: calc(100% - 250px); /* Restamos el ancho de la barra lateral */
            left: 250px; /* Ajustamos la posición para que quede al lado de la barra de la izquierda */
            padding: 10px 0;
            text-align: center;
            z-index: 900; /* Aseguramos que el pie de página esté detrás de otros elementos */
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar {
            background-color: #343a40; /* Color gris oscuro */
            z-index: 900; /* Aseguramos que la barra de navegación esté detrás */
            width: calc(100% - 250px); /* Restamos el ancho de la barra lateral */
            left: 250px; /* Ajustamos la posición */
        }
    </style>
</head>
<body>
    <!-- Barra de navegación superior -->
    <nav class="navbar navbar-dark bg-dark fixed-top"> <!-- Añadido fixed-top para que sea fija en la parte superior -->
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-coins"></i> Solucredis
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
                    <a class="nav-link" href="#"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-dollar-sign"></i> Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-box"></i> Control de Almacén</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contabilidad') }}">
                        <i class="fas fa-calculator"></i> Contabilidad
                    </a>
                </li>
                
                
                
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> Financiera</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-users"></i> RRHH</a>
                </li>
                <!-- Otros enlaces del menú pueden ir aquí -->
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-md-4" id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>¡Bienvenido a Solucredis!</h1>
                    <p class="lead">Gestiona tus finanzas de manera eficiente con Solucredis.</p>
                    <p>Te ofrecemos soluciones financieras personalizadas para tus necesidades.</p>
                    <button class="btn btn-primary">Empezar ahora</button>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="container">
            <span>© 2024 Solucredis. Todos los derechos reservados.</span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
