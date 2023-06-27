<?php
    require_once('../../../util/Conexion.php');
    require_once('../../controller/usuarios.php');
    require_once('../../model/usuario.php');
    $conexion = new Conexion();
    $isConex = $conexion->abrirConexion();
    if($isConex){
        $usuario = new Usuario();
        $usuario->setNombre($_POST['username']);
        $usuario->setContrasenia($_POST['password']);
        $usuarios = new Usuarios();
        if ($usuarios->ingresar($usuario,$isConex)>0){
            header("Location:../administracion/index.html");
        }else{
            echo 'Ingreso no Exitoso';
        }
}else{
    echo 'No conecto en la base de Datos';
}
?>