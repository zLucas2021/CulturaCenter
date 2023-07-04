<?php
abstract class Expectaculo{
    private $id;
    private $titulo;
    private $descripcion;
    private $precio;
    private $url_img;
    private $fecha;
    private $encargado;
    private $isActivo;
    private $tipo;

    /**
     * Esta Funcion carga los valores de los eventos, solo valores basicos 
     * y necesarios para el evento
     * Para cargar los elemntos graficos (imagen y video) ,usar los Sets correspondientes
     * 
     * @access public 
     * @param int $id
     * @param string $titulo
     * @param string $descripcion
     * @param float $precio
     * @param Date $fecha
     * @param string $genero
     * @param int $encargado
     * @param boolean $isActivo
     * @return Null
     */
    public function cargarValores($id,$titulo,$descripcion,$precio,$fecha,$encargado,$isActivo){
        $this->setId($id);
        $this->setTitulo($titulo);
        $this->setDescripcion($descripcion);
        $this->setPrecio($precio);
        $this->setFecha($fecha);
        $this->setEncargado($encargado);
        $this->SetActivo($isActivo);
    }
    
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
    
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function setEncargado($encargado){
        $this->encargado = $encargado;
    }
    function SetActivo($isActivo){
        $this->isActivo = $isActivo;
    }
    function setTipo($tipo) {
        $this->tipo = $tipo;
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
    function getFecha(){
        return $this->fecha;
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