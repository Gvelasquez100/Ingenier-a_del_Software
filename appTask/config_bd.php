<?php
    
    // Variables de la conexion a la DB
    //$mysqli = new mysqli("127.0.0.1:3306","root","root","db_gestor"); //pruebas
    $mysqli = new mysqli("autorack.proxy.rlwy.net:27254","root","aboRYhGGmKPgbMxJVXXPGxSvfzAWCOYg","db_gestor1"); //servidor
    
    // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
        //echo "Conexion exitosa";
    }

?>
