<?php

class clsconexion {
    //put your code here
    private $conexion;
    public function __construct() {
        $this->conexion=new mysqli('localhost','root','','bdproductos');
    }
    
    public function getConexion() {
        return $this->conexion;
    }
    
}
