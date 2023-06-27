<?php
// Verifica si se ha enviado algún botón

if (isset($_POST['btnpeliculas'])) {
    $contenido = '<h2>Peliculas</h2>
    <table class="container">
        <tbody>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Encargado</th>
            <th>Visible</th>
        </tr>
        <tr>
            <td>Película 1</td>
            <td>Descripción 1</td>
            <td>2023-05-01</td>
            <td>Encargado 1</td>
            <td><input type="checkbox" checked></td>
        </tr>
        <tr>
            <td>Película 2</td>
            <td>Descripción 2</td>
            <td>2023-05-05</td>
            <td>Encargado 2</td>
            <td><input type="checkbox"></td>
        </tr>
        </tbody>
    </table>
    <div class="btns">
            <button class="btnABM">Agregar</button>
            <button class="btnABM">Borrar</button>
            <button class="btnABM">Modificar</button>
    </div>';
} elseif (isset($_POST['btneventos'])) {
    $contenido = '<h2>Eventos</h2>
    <table class="container">
        <tbody>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Encargado</th>
            <th>Organizador</th>
            <th>Visible</th>
        </tr>
        <tr>
            <td>Película 1</td>
            <td>Descripción 1</td>
            <td>2023-05-01</td>
            <td>Encargado 1</td>
            <th>Pedro</th>
            <td><input type="checkbox" checked></td>
        </tr>
        <tr>
            <td>Película 2</td>
            <td>Descripción 2</td>
            <td>2023-05-05</td>
            <td>Encargado 2</td>
            <th>Juan</th>
            <td><input type="checkbox"></td>
        </tr>
        </tbody>
    </table>
    <div class="btns">
            <button class="btnABM">Agregar</button>
            <button class="btnABM">Borrar</button>
            <button class="btnABM">Modificar</button>
    </div>';
} else {
    $contenido = '<img src="../media/fondoCentro.png">'; // Contenido inicial vacío
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link rel="stylesheet" href="../../css/administracion.css">
</head>

<body>
    <div class="header">        
        <h3>Cultura Center</h3>
        <span>ADMINISTRACIÓN</span>
        <div class="hedderecha">
            <a href="#">Ir a la Web</a>
            <a href="#">Salir</a>
        </div>
    </div>
    <div class="contenido">
        <form class="contleft" id="contleft" method="post">
            <button type="submit" name="btnpeliculas"> <img src="../../../media/pelicula.png" alt=""> Peliculas</button>
            <button type="submit" name="btneventos"><img src="../../../media/evento.png" alt=""> Eventos</button>
            <button><img src="../../../media/publicidad.png" alt=""> Publicidad</button>
            <button><img src="../../../media/informes.png" alt=""> Informes</button>
            <button><img src="../../../media/personal.png" alt=""> Usuarios</button>
        </form>
        <div class="contcenter">
            <?php echo $contenido; ?>
        </div>
    </div>
    
</body>


</html>