<?php
require_once("./components.php");
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
</head>
<body>
    <div class="barraLeft">
        <div class="contIcono">
            <img src="../../../../media/public/logo1.png" alt="Logo">
        </div>
        <form action="" method="get">
            <button name="Pelicula"><img src="../../../../media/administracion/pelicula.png" alt="Peliculas"></button>
            <button name="Evento"><img src="../../../../media/administracion/evento.png" alt="Eventos"></button>
            <button><img src="../../../../media/administracion/publicidad.png" alt="Publicidad"></button>
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
                    <p>Nombre de Usuario</p>
                    <span>Rol</span>
                </div>
            </div>
        </div>
        <?php
        if(isset($_GET["Pelicula"])){
            echo seccionPublicidad();
}elseif (isset($_GET["Evento"])) {
    echo seccionEvento();
}
?>
        
    </div>
    
</body>
</html>
