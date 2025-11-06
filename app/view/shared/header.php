<header class="header">
    <div class="headerIzquierda">
        <img class="headerIcono" id="usuarioBoton" src="images/usuario.png">
        <div id="panelUsuario" class="usuarioContenido" aria-hidden="true">
            <p><a href="profile-editor.html" class="antiAStyle">Editar perfil</a></p>
            <p><a href="#" class="antiAStyle">Modo oscuro</a></p>
            <p><a href="portafolio.html" class="antiAStyle">Portafolio</a></p>
            <p><a href="centro_gestion.html" class="antiAStyle">Centro de gestión</a></p>
            <hr style="border:0;height:1px;background:#0e0e0e40;margin:8px 0;">
            <p><a href="logout.php" class="antiAStyle">Cerrar sesión</a></p>
            <p><a href="registrarse.html" class="antiAStyle">Registrar usuario</a></p>
            <p><a href="index.html" class="antiAStyle">Iniciar sesión</a></p>
        </div>
        <a href="buscar.php"><img class="headerIcono" id="buscarBoton" src="images/buscar.png"></a>
    </div>
    
    <?php
        require '../controller/php/imagotipo.php';
    ?>

    <div class="headerDerecha">
        <img class="headerIcono" id="crearBoton" src="images/crear.png">
        <img class="headerIcono" id="notificacionesBoton" src="images/notificaciones.png">
    </div>
</header>