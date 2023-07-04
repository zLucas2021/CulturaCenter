<?php
require_once("../model/Espectaculo.php");
class Evento extends Expectaculo {
    private $organizador;
    //
    public function __construct(){
        $this->setId(0);
        $this->setTitulo("");
        $this->setDescripcion("");
        $this->setPrecio(0);
        $this->setUrl_Img("");
        $this->setOrganizador(0);
        $this->setFecha("");
  
        $this->setEncargado(0);
        $this->SetActivo(false);
        $this->setTipo("E");
    }
    
    function setOrganizador($organizador){
        $this->organizador = $organizador;
    }
    function getOrganizador(){
        return $this->organizador;
    }

    function cargarValoresEspectaculo($id,$titulo,$descripcion,$precio,$fecha,$encargado,$isActivo,$organizador){
        parent:: cargarValores($id,$titulo,$descripcion,$precio,$fecha,$encargado,$isActivo);
        $this->setOrganizador($organizador);
    }
}
    
    

?>