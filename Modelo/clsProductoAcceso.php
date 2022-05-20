<?php

require_once 'clsconexion.php';
class clsProductoAcceso {
    private $conexion;
    //put your code here
    public function __construct() {
        $this->conexion= new clsconexion();
    }
    public function listar(){
        $sql='SELECT * FROM producto';
        $consulta=$this->conexion->getConexion()->query($sql);
        $listadoProductos=[];
        $i=0;
        
        while($result=$consulta->fetch_assoc()){
           $listadoProductos[$i]= $result;
           $i++;
        }
        return $listadoProductos;
    }
}
