<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../css/eventos.css">
<?php
require_once('../../Conexion/Conexion.php');
require_once("../../Modelo/Evento.php");
require_once("../../Controlador/Eventos.php");
if(isset($_POST["agregar"])){
    $eventos = new Eventos();
    $conex = $eventos->abrirConexion();
    if($conex and controlarInputs()){
        $evento = new Evento();
        $evento->setTitulo($_POST["titulo"]);
        $evento->setDescripcion($_POST["descripcion"]);

        if(isset($_FILES["url_img"])){
            $pathTemporal =$_FILES["url_img"]["tmp_name"];
            $nombreArchivo = $_FILES["url_img"]["name"];
            move_uploaded_file($pathTemporal,"../../../imagenes/Eventos/".$nombreArchivo);
            $evento->setUrl_Img($nombreArchivo);
        }
        if($eventos->ingresar($evento,$conex)){
            echo '<title>Ingreso Exitoso</title>
            </head>
            <body class="text-center">
                <h3 class="text-success text-center">Guardado Con exito</h3>
                <a class="btn btn-success text-center" href="eventosAdmin.php">Volver a Administracion</a>
                <a calss="btn btn-primary text-center" href="../../../html/eventos.php"></a>';
                
        }else{
            echo '<title>Ingreso No Exitoso</title>
            </head>
            <body>
            <h3 class="text-warning">No se ha podido realizar la Peticion</h3>
            <a class="btn btn-success" href="eventosAdmin.php">Volver a Administracion</a>
            ';
        }
    }else{
        echo '<title>Ingreso No Exitoso</title>
            </head>
            <body class="text-center">
            <h3 class="text-warning">No se ha podido realizar la Peticion</h3>
            <p>Revise Los datos cargados y si el error persiste contacte con Soporte</p>
            <a class="btn btn-success" href="eventosAdmin.php">Volver a Administracion</a>
            ';
    }
}
if(isset($_POST["modificar"])){
    $eventos = new Eventos();
    $conex = $eventos->abrirConexion();
    if($conex and controlarInputs()){
        $evento = new Evento();
        $evento->setId($_POST["id"]);
        $evento->setTitulo($_POST["titulo"]);
        $evento->setDescripcion($_POST["descripcion"]);

        if(isset($_FILES["url_img"])){
            $pathTemporal =$_FILES["url_img"]["tmp_name"];
            $nombreArchivo = $_FILES["url_img"]["name"];
            move_uploaded_file($pathTemporal,"../../../imagenes/Eventos/".$nombreArchivo);
            $evento->setUrl_Img($nombreArchivo);
        }
        if($eventos->modificar($evento,$conex)){
            echo '<title>Modificacion  Exitosa</title>
            </head>
            <body class="text-center">
                <h3 class="text-success text-center">Guardado Con exito</h3>
                <a class="btn btn-success text-center" href="eventosAdmin.php">Volver a Administracion</a>
                <a class="btn btn-primary text-center" href="../../../html/eventos.php">Ver Eventos</a>';
                
        }else{
            echo '<title>Modificacion No Exitosa</title>
            </head>
            <body>
            <h3 class="text-warning">No se ha podido realizar la Peticion</h3>
            <a class="btn btn-success" href="eventosAdmin.php">Volver a Administracion</a>
            ';
        }
    }else{
        echo '<title>Modificacion No Exitosa</title>
            </head>
            <body class="text-center">
            <h3 class="text-warning">No se ha podido realizar la Peticion</h3>
            <p>Revise Los datos cargados y si el error persiste contacte con Soporte</p>
            <a class="btn btn-success" href="eventosAdmin.php">Volver a Administracion</a>
            ';
    }
    }

if(isset($_GET["id"])){
    $eventos = new Eventos();
    $conex = $eventos->abrirConexion();
    if($conex){
        $evento = new Evento();
        $evento->setId($_GET['id']);
        if($eventos->eliminar($evento,$conex)){
            echo '<title>Eliminacion Exitosa</title>
            </head>
            <body class="text-center">
                <h3 class="text-success text-center">Borrado Con exito</h3>
                <a class="btn btn-success text-center" href="eventosAdmin.php">Volver a Administracion</a>
                <a calss="btn btn-primary text-center" href="../../../html/eventos.php">Ver Eventos</a>';
        }else{
            echo '<title>Eliminacion no Exitosa</title>
            </head>
            <body class="text-center">
                <h3 class="text-success text-center">No se pudo Borrar</h3>
                <p>Intente de nuevo y si el error persiste contacte con Soporte</p>
                <a class="btn btn-success text-center" href="eventosAdmin.php">Volver a Administracion</a>
                ';
        }
    }else{
        echo '<title>Modificacion No Exitosa</title>
            </head>
            <body class="text-center">
            <h3 class="text-warning">No se ha podido realizar la Peticion</h3>
            <p>Intente de nuevo y si el error persiste contacte con Soporte</p>
            <a class="btn btn-success" href="eventosAdmin.php">Volver a Administracion</a>
            ';
    }
}

    function controlarInputs(){
        if(empty($_POST['titulo']) and empty($_POST['descripcion'])){
            return false;
        }
        return true;
    }
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</html>