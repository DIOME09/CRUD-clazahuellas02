<?php
    include ("../Config/Conexion.php");

    $Id = $_GET['Id'];
    $sql = "DELETE FROM factura WHERE id_factura ='$id_factura'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location: ../Index.php");
    }

?>