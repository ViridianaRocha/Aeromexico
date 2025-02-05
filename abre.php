<?php
    $conexion = new mysqli("localhost", "root", "", "Aeromexico");
    if($conexion){
        echo "Exitoso!";
    } else{
        echo "Algo salio mal";
    }
?>