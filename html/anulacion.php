<?php include '../consultas/anulacionConsulta.php' ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/anulacion.css">

    <title> Conciliacion Bancaria </title>

</head>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="contenido">

        <h2 class="tituloCreacion"> Anulacion de Cheques </h2>

        <div class="cheques">

            <div class="campos">

                <label> No. de Cheque </label> <br>

                <input type="text" name="numero_cheque" id="numero_cheque"value="<?php  echo $numero_cheque?>">

                <button type="submit" name="buscar">Buscar</button>

            </div>

            <div class="segundoCampoCheque">

                <label> Fecha:</label> <br>
                <input type="date" id="fechaCheque" name="fechaCheque " disabled value="<?php echo $fechaCheque ?>"><br> <br>

                <label for="paguese">Páguese a la orden de:</label> <br>
                <input type="text" id="pagueseALaOrden" name="pagueseALaOrden" disabled
                value="<?php echo $proveedorNombre ?>"> <br> <br>
               
                <label> La suma de </label>  <br>
                <input type="text" name="monto" id="monto" disabled value="<?php echo $monto ?>"><br><br>

                <label for="descripcion">Descripción de Gasto</label><br>

                <textarea class="descripcion" name="descripcion" id="descripcion" cols="30" rows="10"
                disabled><?php echo $descripcion ?></textarea> <br>

            </div>

        </div>

        <div class="gastos">

            <div class="objeto">

                <label> Fecha Anulacion </label> <br>
                <input type="date" name="fechaAnulado" id="fechaAnulado"  value ="<?php  echo $fechaAnulado ?>"><br>

            </div>

            <div class="camposObjeto">

                <label for=""> Detalle Anulacion </label> <br>
                <textarea name="detalleAnulado" id="detalleAnulado" cols="30" rows="10"><?php echo $detalleAnulado ?></textarea>

            </div>

        </div>



        <div class="botones">

            <button type="submit" name="anular" <?php echo $disabledAnular; ?>>Anular</button><br>

        </div>

    </div>

</form>

</body>

</html>