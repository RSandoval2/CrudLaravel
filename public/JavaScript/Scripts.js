function mostrarBancos() {
    // Ocultar otros contenidos si es necesario
    document.getElementById('content-contabilidad').style.display = 'none';
    document.getElementById('content').style.display = 'none';
    // Mostrar la vista de bancos
    document.getElementById('formulario-bancos').style.display = 'block';
}

// Función para mostrar el contenido principal
function mostrarContenidoPrincipal() {
    // Ocultar contenido de contabilidad y formulario de bancos
    document.getElementById('content-contabilidad').style.display = 'none';
    document.getElementById('formulario-bancos').style.display = 'none';
    // Mostrar contenido principal
    document.getElementById('content').style.display = 'block';
}

// Función para mostrar el contenido de la contabilidad
function mostrarContabilidad() {
    // Ocultar otros contenidos y formulario de bancos
    document.getElementById('content').style.display = 'none';
    document.getElementById('formulario-bancos').style.display = 'none';
    // Mostrar contenido de contabilidad
    document.getElementById('content-contabilidad').style.display = 'block';
}


