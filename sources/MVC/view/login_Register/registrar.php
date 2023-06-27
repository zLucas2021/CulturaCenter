<?php
    require_once('../Conexion/Conexion.php');
    require_once('../controlador/usuarios.php');
    require_once('../modelo/usuario.php');
    $conexion = new Conexion();
    $isConex = $conexion->abrirConexion();
    
    if($isConex){
        $usuario = new Usuario();
        $usuario->setNombre($_POST['nombre']);
        $usuario->setContrasenia($_POST['contrasenia']);
        $usuario->setUsuario($_POST["correo"]);
        $usuario->setEmail($_POST["correo"]);
        $usuario->setDni($_POST["dni"]);
        $usuario->setRol("U");        
        $usuario->setTelefono($_POST["telefono"]);
        $usuarios = new Usuarios();
        if ($usuarios->consultarEmail($usuario->getEmail(),$isConex) == 0){
            if ($usuarios->registrar($usuario,$isConex)){
                echo 'Registro Exitoso';
            }else{
                echo 'Registro no Exitoso';
            }
        }else{
            echo "Lo siento el email ya esta registrado";
        }
}else{
    echo 'No conecto en la base de Datos';
}
?>