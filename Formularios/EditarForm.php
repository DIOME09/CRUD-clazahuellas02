<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Factura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR FACTURAS</h1>
    <br>
    <form class="container" action="../CRUD/EditarDatos.php" method="POST">
        <?php
            include ('../Config/Conexion.php');

            $sql = "SELECT * FROM factura WHERE id_factura =".$_GET['id'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['id_factura']; ?>">

        <!--TRAER DATOS CATEGORIAS-->
        <label>Envio</label>
        <select class="form-select mb-3" aria-label="Default select example" name="envio">
            <option selected disabled>--Seleccione envio--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql1 = "SELECT * FROM envio WHERE id=".$row['id_envio'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['id']."'>".$row1['empresa']."</option>";

                $sql2 = "SELECT * FROM envio";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['id']."'>".$Fila['id_envio']."</option>";
                }
            ?>   
        </select>
        <label>Metododepago</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Metododepago">
            <option selected disabled>--Seleccione pago--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql3 = "SELECT * FROM metododepago WHERE Id=".$row['id_pago'];
                $resultado3 = $conexion->query($sql3);

                $row3 = $resultado3->fetch_assoc();

                echo "<option selected value='".$row3['id']."'>".$row3['metodo_pago']."</option>";

                $sql4 = "SELECT * FROM metododepago";
                $resultado4 = $conexion->query($sql4);

                while ($Fila = $resultado4->fetch_array()) {
                    echo "<option value='".$Fila['Id']."'>".$Fila['NombreMarca']."</option>";
                }
            ?>   
        </select>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="Precio" value="<?php echo $row['Precio']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="<?php echo $row['DescripcionProducto']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="Nombre" value="<?php echo $row['Nombre']; ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

</body>