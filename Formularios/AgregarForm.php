<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Factura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Factura</h1>
    <br>
    <div class="container">
        <form action="../CRUD/insertarDatos.PHP" method="POST">
        <label for="">Envio</label>
        <select class="form-select mb-3" name="envioP">
            <option selected disabled>--Seleccionar envio--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql = $conexion->query("SELECT * FROM envio");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['id_envio']."'>".$resultado['empresa']."</option>";
                }
            ?>
        </select>
        <label for="">Metododepago</label>
        <select class="form-select mb-3" name="metododepagoP">
            <option selected disabled>--Seleccionar pago--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql = $conexion->query("SELECT * FROM metododepago");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['id_pago']."'>".$resultado['metodo_pago']."</option> ";
                }
            ?>
        </select>
        <div class="mb-3">
            <label class="form-label">preciototal</label>
            <input type="text" class="form-control" name="preciototal">
        </div>
       
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar </button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>
        
        
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
