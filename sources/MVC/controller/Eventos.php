<?php
require_once("../model/Evento.php");

class Eventos extends Conexion
{
    /**
     * Ingresa en la base de datos los datos del evento
     * @param Evento $evento
     * @param mysqli $conexion
     * @return boolean Resultado de la operacion
     */
    public function ingresar(Evento $evento, $conexion)
    {
        $titulo = $evento->getTitulo();
        $descripcion = $evento->getDescripcion();
        $precio = $evento->getPrecio();
        $url = $evento->getUrl_Img();
        $video = $evento->getVideo();
        $idEncargado = $evento->getEncargado();
        $fecha = $evento->getFecha();
        $tipo = $evento->getTipo();
        $duracion = $evento->getDuracion();
        $genero = "";
        $idOrganizador = $evento->getOrganizador();
        $isActivo = $evento->getActivo();
        $consulta = "INSERT INTO espectaculos VALUES (0,'$titulo','$descripcion',$precio,'$url','$video',$idOrganizador,'$fecha','$tipo',$duracion,'$genero',$idEncargado,$isActivo)";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            return true;
        }
        return false;
    }
    /**
     * TODO Modificar el query para que modifique de buena manera , y modificar la Documentacion
     */
    public function modificar(Evento $evento, $conexion)
    {
        $id = $evento->getId();
        $titulo = $evento->getTitulo();
        $descripcion = $evento->getDescripcion();
        $url = $evento->getUrl_Img();
        try {
            $consulta = "UPDATE `eventos` SET `titulo`='$titulo',`descripcion`='$descripcion',`url_img`='$url' WHERE id = '$id'";
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            echo "Error al guardar los datos";
            echo $e;
            return false;
        }
    }
    /** 
     * TODO: Realizar la documentacion
     */
    public function eliminar(Evento $evento, $conexion)
    {
        $id = $evento->getId();
        $consulta = "DELETE FROM `eventos` WHERE id = '$id'";
        try {
            $resultado = mysqli_execute_query($conexion, $consulta);
            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            echo "A Ocurrido un error al borrar";
            echo $e;
            return false;
        }
    }
    /**
     * TODO: Modificar los datos traidos de la consulta
     * 
     */
    public function listar(string $query, $conexion)
    {
        $lista = array();
        try {            
            $resultado = mysqli_query($conexion,$query);
            if ($resultado) {                                
                while ($row =($resultado->fetch_array())){                                                                                                        
                    $evento = new Evento();          
                    $evento->setId($row['id_espectaculo']);                                            
                    $evento->setTitulo($row['titulo']);                    
                    $evento->setDescripcion($row['descripcion']);
                    $evento->setPrecio($row['precio']);            
                    $evento->setUrl_Img($row['imagen']);
                    $evento->setVideo($row['video']);                    
                    $evento->setOrganizador($row['organizador']);                    
                    $evento->setFecha($row['fecha']);                    
                    $row['tipo'];
                    $evento->setDuracion($row['duracion']);                    
                    $row['genero'];
                    $evento->setEncargado($row['encargado']);
                    $evento->SetActivo($row['isActivo']);                                    
                    $lista[] = $evento;
                }
            }else{
                echo "NO se realizo la Consulta";
            }
            return $lista;
        }catch (Exception $e) {
            echo "Error en la consulta";
            echo $e;
        }
    }
    public function listarEnWeb(Evento $evento, $conexion)
    {
        $lista = $this->listar("SELECT * FROM espectaculos WHERE id=" . $evento->getId() . " LIMIT 1", $conexion);
    }
    /**
     * TODO:Mejorar la documentacion
     * 
     * @return Evento 
     */
    public function obtenerEvento(Evento $evento, $conexion)
    {
        $lista = $this->listar("SELECT * FROM espectaculos WHERE id=" . $evento->getId() . " LIMIT 1", $conexion);
        if (sizeof($lista) > 0) {
            $evento = $lista[0];
        } else {
            $evento  = new Evento();
        }
        return $evento;
    }
}
