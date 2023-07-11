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
        $consulta = $usuarios->ingresar($usuario,$isConex);   
        $datos = $consulta->fetch_array();                       
        if ($consulta->num_rows>0){
            crearSesion($datos[0],$datos[2],$datos[6]);
            header('Location:../administracion/index.php');
        }else{
            echo 'Ingreso no Exitoso';
        }
}else{
    echo 'No conecto en la base de Datos';
}
function crearSesion($id,$nombre,$rol){
    session_start();
    $_SESSION["usuario"] = array();
    $_SESSION["usuario"]["id"]=$id;
    $_SESSION["usuario"]["Nombre"]=$nombre;
    $_SESSION["usuario"]["rol"]=$rol;
}
?>