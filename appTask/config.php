<?php
    
    // Variables de la conexion a la DB
    $mysqli = new mysqli("roundhouse.proxy.rlwy.net:52958","root","XGeQjkoGJZdFCHtGrbrCYCcZDzVWZmpT","db_gestor");
    
    // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
        echo "Conexion exitosa";
    }

?>
