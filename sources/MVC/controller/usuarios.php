<?php
class Usuarios extends Conexion{
    public function ingresar(Usuario $usuario,$conexion){
        try{            
            $query= "SELECT * FROM usuarios WHERE nombre_usuario='".$usuario->getNombre()."' and contrasenia='".$usuario->getContrasenia()."';";
            $resultado = mysqli_query($conexion,$query);
        }catch (Exception $e){
            echo $e->getMessage();
        }
        return $resultado->num_rows;
    }
    public function registrar(Usuario $usuario,$conexion){
        try{
            $query="INSERT INTO usuarios  VALUES (0,'".$usuario->getUsuario()."','".$usuario->getNombre()."','".$usuario->getContrasenia()."','".$usuario->getEmail()."',".$usuario->getTelefono().",".$usuario->getDni().",'".$usuario->getRol()."')";
            $resultado = mysqli_query($conexion,$query);
            return $resultado;
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function consultarEmail($email , $conexion){
        try{
            $query = "SELECT email FROM usuarios WHERE email ='".$email."';";            
            $resultado = mysqli_query($conexion,$query);
            return $resultado->num_rows;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
?>