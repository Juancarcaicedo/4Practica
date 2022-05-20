<?php
    session_start();
    ?>

<?php

require_once 'clsconexion.php';
class clsPersona {
    private $conexion;
    public function __construct() {
        $this->conexion= new clsconexion();
        if($conexion->connect_error){
            die("La conexion fallo: ");
        }
        $usuario = $_POST['usuario'];       
        $password = $_POST['contraseña'];
    }

    
    
    public function iniciarSesion(){
        $sql= "SELECT * persona where user = $user";
    }
}
