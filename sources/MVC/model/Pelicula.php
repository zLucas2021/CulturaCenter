<?php

class Pelicula extends Expectaculo {
    
    //
    public function __construct(){
        $this->setId(0);
        $this->setTitulo("");
        $this->setDescripcion("");
        $this->setPrecio(0);
        $this->setUrl_Img("");
        $this->setFecha("");
        $this->setDuracion("");
        $this->setEncargado(0);
        $this->SetActivo(false);
        $this->setTipo("P");
    }
    
}
    
    

?>