<?php  include "../consultas/circulacionConsulta.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/sacarCirculacion.css">

    <title> Conciliacion Bancaria </title>
</head>

<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="contenido">

        <h2 class="tituloCreacion"> Sacar Cheques de Circulación </h2>

        <div class="cheques">

            <div class="campos">

                <label> No. Cheque </label> <br>

                <input type="text" name="numero_cheque" onkeydown="return soloNumeros(event)" id="numero_cheque"value="<?php  echo $numero_cheque?>">
                <button type="submit" name="buscar">Buscar</button>

            </div>



            <div class="segundoCampoCheque">

                <label> Fecha </label> <br>
                <input type="date" id="fechaCheque" name="fechaCheque " disabled value="<?php echo $fechaCheque ?>"><br> <br>

                <label> Paguese a orden de: </label> <br>
                <input type="text" id="pagueseALaOrden" name="pagueseALaOrden" disabled
                value="<?php echo $proveedorNombre ?>"> <br>

                <label> La suma de: </label> <br>
                <input type="text" name="monto" id="monto" disabled value="<?php echo $monto ?>"><br> <br>

                <label> Descripcion de gastos: </label> <br>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10"
                disabled><?php echo $descripcion ?></textarea>

            </div>

        </div>



        <div class="gastos">

            <div class="objeto">

                <label> Fecha / Banco </label> <br>
                <input type="date" id="circulacion" name="circulacion" disabled >

                <div class="boton1">

                <button type="submit" name= "grabar" disabled <?php echo $disabledAnular; ?>>Grabar</button>

                </div>


            </div>

        </div>

    </div>

</form>
    
    <script src="script.js"></script>

</body>

</html>