<?php 
    require '../../Conexion/Conexion.php';
    require '../../Controlador/Eventos.php';
    require '../../Modelo/Evento.php';
    $mostrar = false;
    if(isset($_GET['id'])){
        $mostrar =true;
        $eventos = new Eventos();
        $conex =$eventos->abrirConexion();
        if ($conex){
            $evento = new Evento();
            $evento->setId($_GET['id']);
            $DatosEvento = $eventos->obtenerEvento($evento,$conex);
            $eventos->cerrarConexion($conex);
        }else{
            echo "No se a podido acceder a la Base de Datos";
        }
        
    }else{
        echo '<h1 class="text-center display-4"> Por Favor Seleccione un Evento a Modificar</h1>';
        echo '<p><a href="eventosAdmin.php">Volver A Administracion de Eventos</a></p>';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../css/eventos.css">
</head>

<body>
    <?php 
        if($mostrar){
    ?>
    <div class="container mt-5">
        <h3 class="text-center display-4">Modificar Evento</h3>
        <form action="preparar.php" method="post" enctype="multipart/form-data" name="frmEditar">
            <div class="d-flex justify-content-between mb-3">
                <button type="reset" class="btn border border-secondary mb-3"><i
                        class="bi bi-x-circle-fill text-secondary"></i></button>
                <span class="id">ID: <input class="text-primary" type="text" readonly name="id" value="<?php echo $DatosEvento->getId();?>" style="width:2rem;background-color:transparent;border:none"></span>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="titulo" required name="titulo" value="<?php echo $DatosEvento->getTitulo();?>">
                <label for="titulo">Titulo</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control descripcion" placeholder="Ingrese la descripcion" name="descripcion" required
                    maxlength="250"><?php echo $DatosEvento->getDescripcion();?></textarea>
                <label for="descripcion">Descripcion</label>
            </div>
            <p class="blockquote">Ingresar Imagen</p>
            <span class="text-warning blockquote-footer">Se Requiere Recargar la Imagen</span>
            <div class="input-group ">
                <input type="file" class="form-control" id="inputGroupFile01" name="url_img" >
            </div>
            <div class="text-center mt-3 ">
                <button type="submit" class="btn btn-success" name="modificar">Modificar</button>
                <a href="eventosAdmin.php" target="_blank"class="btn btn-secondary">
                    Volver
                </a>
            </div>
        </form>
    </div>
    <?php }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>