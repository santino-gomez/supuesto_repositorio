document.addEventListener('DOMContentLoaded', function() {
    const boton = document.getElementById('redirigirRegistro');

    boton.addEventListener('click', function() {
        window.location.href = 'registrarse.php'; 
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const boton = document.getElementById('redirigirInicioSesion');

    boton.addEventListener('click', function() {
        window.location.href = 'inicioSesion.php'; 
    });
});