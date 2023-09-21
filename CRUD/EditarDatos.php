<?php

include_once("../Config/Conexion.php");

$id_factura = $_POST['id_factura'];
$id_usuario = $_POST['id_usuario'];
$fechaemision = $_POST['fechaemision'];
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];
$preciounitario = $_POST['preciounitario'];
$preciototal = $_POST['preciototal'];
$id_pago = $_POST['id_pago'];
$id_envio = $_POST['id_envio'];

$sql = "UPDATE factura SET 
                    id_factura='".$id_factura."',
                    id_usuario='".$id_usuario."',
                    fechaemision='".$fechaemision."',
                    id_producto='".$id_producto."',
                    cantidad='".$cantidad."',
                    preciounitario='".$preciounitario."',
                    preciototal='".$preciototal."',
                    id_pago='".$id_pago."',
                    id_envio='".$id_envio."' WHERE id_factura = ".$id_factura;

if ($resultado = $conexion->query($sql)) {
    header("location:../Index.php");
}

?>