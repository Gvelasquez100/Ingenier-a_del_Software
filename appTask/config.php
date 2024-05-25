<?php
    
    // Variables de la conexion a la DB
    $mysqli = new mysqli("monorail.proxy.rlwy.net:28809","root","ckOwAMiLeYndcawWDZxKfPqsogrgqkqN","db_gestor");
    
    // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
        echo "Conexion exitosa";
    }

?>
