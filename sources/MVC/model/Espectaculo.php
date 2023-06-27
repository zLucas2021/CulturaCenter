<?php
class Expectaculo{
    public $id;
    public $titulo;
    public $descripcion;
    public $precio;
    public $url_img;
    public $video;
    public $organizador;
    public $fecha;
    public $duracion;
    public $genero;
    public $encargado;
    public $isActivo;
    public $tipo;
    
    //*Setters
    function setId($id){
        $this->id = $id;
    }
    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    function setPrecio($precio){
        $this->precio = $precio;
    }
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    function setUrl_Img($url_img){
        $this->url_img = $url_img;
    }
    function setVideo($video){
        $this->video = $video;
    }
    function setOrganizador($organizador){
        $this->organizador = $organizador;
    }
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function setDuracion($duracion){
        $this->duracion = $duracion;
    }
    function setGenero($genero){
        $this->genero= $genero;
    }
    function setEncargado($encargado){
        $this->encargado = $encargado;
    }
    function SetActivo($isActivo){
        $this->isActivo = $isActivo;
    }
    //*Getters
    function getId(){
        return $this->id;
    }
    function getTitulo(){
        return $this->titulo;
    }
    function getPrecio(){
        return $this->precio;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function getUrl_Img(){
        return $this->url_img;
    }
    function getVideo(){
        return $this->video;
    }
    function getOrganizador(){
        return $this->organizador;
    }
    function getFecha(){
        return $this->fecha;
    }
    function getDuracion(){
        return $this->duracion;
    }
    function getEncargado(){
        return $this->encargado;
    }
    function getActivo(){
        return $this->isActivo;
    }
    function getTipo(){
        return $this->tipo;
    }
}
?>