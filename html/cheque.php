<?php include "../consultas/chequeConsultas.php" ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/cheque.css">
    <script src="../js/chequeFunciones.js"></script>
    <script src="../js/script.js"></script>

    <title> Cheque </title>
   
</head>

<body onload="pasarMonto()">

    <main id="contenido">

        <form action="" method="post">

            <div class="elemento-principal">

                <h3 class="titulo-creacion">Creación</h3>

                <div class="elementos">


                    <div class="div-izquierdo">

                        <h3 class="tituloCheques"> Cheques </h3>

                        <div class="datos">

                            <div class="datos-1">

                                <label class="titulo-numche">N°. de Cheque</label>
                                <input class="input-numche" type="text" name="numCheque" id="numCheque" required onblur="verificarCheque(this.value)" onkeydown="return soloNumeros(event)"  value="<?php echo $numCheque ?>"> 
                    
                            </div>


                            <div class="datos-2">

                                <label class="titulo-fecha">Fecha</label>
                                <input class="input-fecha" type="date" name="fecha" id="fecha" required>

                            </div>

                        </div>

                        <div class="datos-restantes">

                            <label class="titulo-paguese">Paguese a la orden de</label>

                            <select class="ordenDe" name="proveedores" id="proveedores">

                                <?php while($proveedores = mysqli_fetch_assoc($tablaProveedores)): ?>
                                    <option value="<?php echo $proveedores['codigo'] ?>"><?php echo $proveedores['nombre'] ?></option>
                                <?php endwhile; ?>

                            </select>

                            <label class="titulo-suma">La suma de</label>

                            <div class="monto">

                                <input class="input-suma1" type="text" name="montoPagar" id="montoPagar">
                                <input class="input-suma2" type="text" name="montoLetras" id="montoLetras">

                            </div>

                            <label>Detalle</label>
                            <input class="detalle" type="text" name="descripcion" id="descripcion"> 

                             <button class="botones" type="submit" id="grabarCheque" name="grabarCheque">Grabar</button>

                        </div>
                    </div>

                    <div class="div-derecho">

                        <h3 class="titulo-objeto-gastos">Objetos de Gastos</h3>

                        <div class="datos-derecha">

                            <div class="datos-derecha1">

                                <label> Objeto </label>

                                <select name="objeto" id="objeto">

                                    <?php 
                                        while($objeto = mysqli_fetch_assoc($objetoGasto)) {
                                    ?>

                                    <option value="<?php echo $objeto['codigo'] ?>"><?php echo $objeto ['detalle']?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                    
                            </div>

                            <div class="datos-derecha2">

                                <label class="subTitulo4">Monto</label>
                                <input type="text" name="montoObjeto" id="montoObjeto">

                            </div>


                        </div>

                        <button class="botones" type="button" onclick="resetearCampos()">Restablecer</button>

                    </div>

                </div>

            </div>

        </form>

    </main>

</body>

</html>