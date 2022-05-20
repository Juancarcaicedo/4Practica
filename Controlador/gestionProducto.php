<?php
require 'modelo/clsProductoAcceso.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$datos=new clsProductoAcceso();
$lstProductos=$datos->listar();

require 'vista/inicioSesion.php';
