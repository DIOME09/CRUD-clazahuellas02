<?php

include ("../Config/Conexion.php");


$preciototal = $_POST['preciototalP'];


$sql = "INSERT INTO factura(preciototal) VALUES('$preciototal')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:../Index.php");
} else {
    echo "Datos NO insertados";
}

?>