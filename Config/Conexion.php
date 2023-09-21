<?php


    $host  = "localhost";
    $user = "root";
    $pass = "12345678";
    $db = "calzahuellas02";

    $conexion = new mysqli($host, $user, $pass, $db);

    if (!$conexion) {
        echo 'Conexion fallida';    
    }