<?php
    
    // Variables de la conexion a la DB
    //$mysqli = new mysqli("127.0.0.1:3306","root","root","db_gestor"); //pruebas
    $mysqli = new mysqli("autorack.proxy.rlwy.net:57379","root","kaGqWhBngHXlhCoRjWvTCvPGVTXeMcEk","db_gestor"); //servidor
    
    // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
        //echo "Conexion exitosa";
    }

?>
