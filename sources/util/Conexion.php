<?php
class Conexion{
        private $tipo_bd;
        private $host;
        private $usr;
        private $pasw;
        private $db;
        private $puerto;
        private $conexion_db;
        private $dsn ;

        public function __construct(){
            $this->tipo_bd="mysql";
            $this->host="localhost";
            $this->usr="root";
            $this->pasw="";
            $this->db="culturacenter";
            $this->puerto="3307";//3307
            $this->conexion_db=null;
            $this->dsn=null;
            
        }
        public function abrirConexion(){
            $conexion = mysqli_connect($this->getHost(),$this->getUsr(),$this->getPasw(),$this->getDb());
            if (!$conexion){
                echo "Conectamos";
            }
            return $conexion;
        }
        public function cerrarConexion($conexionRealizada){
            $cerrarConexion = mysqli_close($conexionRealizada);
            if($cerrarConexion){
            }
        }
        //
        public function getTipo_bd(){
            return $this->tipo_bd;
        }
        public function getHost(){
            return $this->host;
        }
        public function getUsr(){
            return $this->usr;
        }
        public function getPasw(){
            return $this->pasw;
        }
        public function getDb(){
            return $this->db;
        }
    }
?>