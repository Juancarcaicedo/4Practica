<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> pagina Producto </title>
    </head>
    <body>
    <center>
        <table>
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($lstProductos as $item){
                    echo'<tr>';
                    echo'<td>'.$item["codigo"].'<td>';
                    echo'<td>'.$item["nombre"].'<td>';
                    echo'<td>'.$item["precio"].'<td>';
                    echo'<tr>';
                }
                ?>
            </tbody>
        </table>
    </center>
    <?php
    
    ?>
        
    </body>
</html>
