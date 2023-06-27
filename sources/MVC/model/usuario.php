<?php
class Usuario{
    private $id;
    private $usuario;
    private $nombre;
    private $ROL;
    private $contrasenia;
    private $email;
    private $telefono;
    private $dni;
    public function __construct()
    {
    }
    //Setters
    function setId($id){
        $this->id = $id;
    }
    function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setRol($rol){
        $this->ROL = $rol;
    }
    function setContrasenia($contrasenia){
        $this->contrasenia = $contrasenia;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    function setDni($dni){
        $this->dni = $dni;
    }
    //Getters
    function getId(){
        return $this->id;
    }
    function getUsuario(){
        return $this->usuario;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getRol(){
        return $this->ROL;
    }
    function getContrasenia(){
        return $this->contrasenia;
    }
    function getEmail(){
        return $this->email;
    }
    function getTelefono(){
        return $this->telefono;
    }
    function getDni(){
        return $this->dni;
    }
}
?>