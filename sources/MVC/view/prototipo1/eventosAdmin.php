<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../css/eventos.css">
    <link rel="shortcut icon" href="../../../img/Logo Etiqueta Cine Palomitas Retro Rojo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="intro text-center mt-3 ">
            <h3 class=" display-6 fw-bold">Adminstrador De Eventos</h3>
            <p class="lead">Crear-Borrar-Modificar Eventos</p>
        </div>
        <div class="eventos ">
            <form action="post" >
                <table class="table table-striped table-hover">
                    <thead>
                        <tr >
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php
                        require "../util/Conexion.php";
                        require "../controller/Eventos.php";
                        require "../model/Evento.php";
                        
                        $eventos =new Eventos();
                        $conex=$eventos->abrirConexion();                        
                        if($conex){
                            $lista = $eventos->listar("SELECT * FROM espectaculos",$conex);
                            echo sizeof($lista);
                            foreach ($lista as $llave =>$valor){
                                echo '<tr>                            
                                <td > <label class=" d-flex">'.$valor->getId(). '</label> </td>
                                <td ><label class="d-flex">'.$valor->getTitulo(). '</label> </td>
                                <td> <label class="d-flex">'.$valor->getDescripcion(). '</label></td>
                                <td><img class="d-flex" src="../../../imagenes/Eventos/'.$valor->getUrl_Img(). '" style="max-width:5rem"></td>  
                            <td class="text-center">
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal'.$valor->getId().'"><i class="bi bi-trash-fill text-dark"></i> Borrar</a>
                            <a class="btn btn-warning" href="frmEditar.php?id= '.$valor->getId().'">Modificar</a>
                            </td>
                            <div class="modal fade" id="modal'.$valor->getId().'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Atencion </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Seguro que quieres eliminar a '.$valor->getId().'-'.$valor->getTitulo().'
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button  type="button" class="btn btn-warning"><a class="text-dark" href="preparar.php?id= '.$valor->getId().'" style="text-decoration:none;">Confirmar</a></button>
                                </div>
                                </div>
                            </div>
                            </div>
 
                        </tr>';
                            }
                            $eventos->cerrarConexion($conex);
                        }else{
                            echo "<h1>No se pudo establecer la conexcion con la base de Datos<h1>";
                        }
                        ?>                        
                    </tbody>                   
                </table>
                <div class="footer text-center d-flex justify-content-around">
                    <a href="frmAgregar.html" style="text-decoration: none;" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Crear</a>                   
                    
                    
            </div>
            </form>
    </div>
    </div>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</html>