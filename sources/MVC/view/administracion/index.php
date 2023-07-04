<?php
require_once("./components.php");
session_start();
if (empty($_SESSION["usuario"])){
    header("Location:../login_Register/");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradcion</title>
    <link rel="stylesheet" href="../../../css/administracion/administracion.css">
    <link rel="stylesheet" href="../../../css/administracion/espectaculos.css">
    <link rel="stylesheet" href="../../../css/public/boostrap_include.css">
    <link rel="stylesheet" href="../../../css/administracion/publicidad.css">
</head>
<body>
    <div class="barraLeft">
        <div class="contIcono">
            <img src="../../../../media/public/logo1.png" alt="Logo">
        </div>
        <form action="" method="get">
            <button name="Pelicula"><img src="../../../../media/administracion/pelicula.png" alt="Peliculas"></button>
            <button name="Evento"><img src="../../../../media/administracion/evento.png" alt="Eventos"></button>
            <button name="Publicidad"><img src="../../../../media/administracion/publicidad.png" alt="Publicidad"></button>
            <button><img src="../../../../media/administracion/usuarios.png" alt="Usuarios"></button>
            <button><img src="../../../../media/administracion/informe.png" alt="Informes"></button>
        </form>
    </div>
    <div class="contenedor">
        <div class="barraTop">
            <div class="encabezado">
                <a href="#" target="_blank" rel="noopener noreferrer">CULTURA CENTER</a>
            </div>
            <div class="datosUsuario">
                <div class="contenido">
                    <p><?php echo $_SESSION["usuario"]["Nombre"];?></p>
                    <span><?php echo $_SESSION["usuario"]["rol"]; ?></span>
                </div>
                <form action="" method="post">
                <button name="salir" class="btn btn-secondary rounded d-flex justify-content-center "><img class="btn-logout" src="../../../../media/public/logout.svg" alt="Salir" ></button>
                </form>
            </div>
        </div>
        <?php
        if(isset($_GET["Pelicula"])){
            echo seccionPelicula();
        }elseif (isset($_GET["Evento"])) {
            echo seccionEvento();
        }
        elseif(isset($_GET["Publicidad"])){
            echo seccionPublicidad();
        }

        if(isset($_POST["salir"])){
            unset($_SESSION["usuario"]);
            header("Location:../login_Register/");
        }
?>
        
    </div>
    
</body>
</html>
