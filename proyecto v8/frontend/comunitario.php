<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" href="images/ConectaUTU.svg" type="image/x-icon">
    <title>ConectaUTU - Comunitario</title>
</head>
<body>
    <div>
        <?php
            require '../backend/php/header.php'; 
        ?>

        <?php
            require '../backend/php/panelHeader.php'; 
        ?>

        <div class="pagina">
            <div class="foros">
                <p style="color: #afafaf; margin-inline: min(85%, 50px);"><i>Aquí encontrarás posts de la comunidad, creados por usuarios de la página, en vez de instituciones y organizaciones.</i></p>

                <br>

                <?php
                    $pfpUsuario = "";
                    $foroNombreUsuario = "Usuario";
                    $foroArrobaUsuario = "usuario929847";

                    $foroPostTitulo = "Me encuentro en busca de empleo.";
                    $foroPostDesc = "";
                    $foroPostImagen = "";
                    $foroPuntajePost = 0;
                    include '../backend/php/forosPost.php';
                ?>

                <?php
                    $pfpUsuario = "images/profilePictures/FB_IMG_1600387484979.webp";
                    $foroNombreUsuario = "Momo";
                    $foroArrobaUsuario = "momoladinastia_ok";

                    $foroPostTitulo = "Me echaron del trabajo.";
                    $foroPostDesc = "Hola amigos!!! hoy quería decirles que como lo dice el título, me echaron del trabajo... <br>
                                Sí, muy triste la noticia la verdad... pero vengo acá para ver si encuentro laburo acá. <br>
                                Vivo en Canelones, tengo 23 años y experiencia en atención al cliente, ventas y repositor. <br>
                                Si alguien sabe de algo, por favor avísenme. <br>
                                Muchas gracias a todos y suerte con sus búsquedas también. <br>
                                No es urgente, todavía me están pagando la indemnización.";
                    $foroPostImagen = "images/userContent/239959701_858164098158726_4463780559878454497_n.jpg";
                    $foroPuntajePost = 27;
                    include '../backend/php/forosPost.php';
                ?>

                <?php
                    $pfpUsuario = "";
                    $foroNombreUsuario = "Usuario";
                    $foroArrobaUsuario = "usuario935278";

                    $foroPostTitulo = $mensajeEliminadoTitulo;
                    $foroPostDesc = $mensajeEliminadoDesc;
                    $foroPostImagen = "";
                    $foroPuntajePost = 0;
                    include '../backend/php/forosPost.php';
                ?>
            </div>
        </div>

        <div class="espacioFooter">
            <div class="footer">
                <p>ConectaUTU - 2025</p>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="js/advertencia.js"></script>
</body>
</html>