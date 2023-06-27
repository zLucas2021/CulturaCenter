<?php

class Pelicula extends Expectaculo {
    
    //
    public function __construct(){
        $this->setId(0);
        $this->setTitulo("");
        $this->setDescripcion("");
        $this->setPrecio(0);
        $this->setUrl_Img("");
        $this->setVideo("");
        $this->setOrganizador(0);
        $this->setFecha("");
        $this->setDuracion("");
        $this->setGenero("");
        $this->setEncargado(0);
        $this->SetActivo(false);
        $this->tipo = "E";
    }
    
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
     * @param int $organizador
     * @param Date $fecha
     * @param float $duracion
     * @param string $genero
     * @param int $encargado
     * @param boolean $isActivo
     * @return Null
     */
    public function cargarValores($id,$titulo,$descripcion,$precio,$organizador,$fecha,$duracion,$genero,$encargado,$isActivo){
        $this->setId($id);
        $this->setTitulo($titulo);
        $this->setDescripcion($descripcion);
        $this->setPrecio($precio);
        $this->setOrganizador($organizador);
        $this->setFecha($fecha);
        $this->setDuracion($duracion);
        $this->setGenero($genero);
        $this->setEncargado($encargado);
        $this->SetActivo($isActivo);
    }
    
}
    
    

?>