<?php include "../consultas/conciliacionConsulta.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/conciliacion.css">
</head>
<body>
    <form method="post">
    <div class="contenido">
        <div class="titulo">
            <h2> Conciliacion Bancaria </h2>
        </div>
        <div class="content">
            <div class="textos">
                <div class="primerosCampos">
                    <label for="">Mes</label>
                    <select name="mes" id="mes" >
           <?php while($mes = mysqli_fetch_assoc($tablaMeses)) {
    ?>
            <option value="<?php echo $mes['mes'] ?>"><?php echo $mes ['nombre_mes']?></option>
            <?php
    }
            ?> 
            </select>
        
                </div>
                <label class="text1">SALDO SEGÚN AL LIBRO AL</label>
                <label class="text2"> Más: Depósito </label>
                <label class="text2"> Cheques acumulados </label>
                <label class="text2"> Notas de Crédito </label>
                <label class="text2"> Ajustes </label>
                <label class="subtotalTitulo"> SUBTOTAL </label>
                <label class="text3"> Menos: Cheques girados en el mes </label>
                <label class="text3"> Notas de Débitos </label>
                <label class="text3"> Ajustes </label>
                <label class="subtotalTitulo"> SALDO CONCILIADO SEGÚN LIBROS AL </label>
            </div>
            <div class="campos1">
                <label for="">Año</label>
                <input type="number" id="anio" name="anio" min="2023" value="2023"><br>
                <input type="text" value="<?php echo $mas_deposito?>">
                <input type="text" value="<?php echo $chequeAnulados ?>">
                <input type="text" value="<?php echo $notasCredito ?>">
                <input type="text" value="<?php echo $ajusteLibro ?>">
                
                <label class="subtotalCampos1"> Subtotal </label>
                <input type="text" value="<?php echo $chequesGirados ?>">
                
                <input type="text" value="<?php echo $notasDebito ?>">
                <input type="text" value="<?php echo $menosAjusteLibro ?>">
                <label class="subtotalCampos1"> Subtotal </label>
            </div>
            <div class="campos2">
                <button type="submit"> Realizar Conciliacion </button>
                <input type="text" value="<?php echo $saldo_anterior?>">
                <input class="primerCampo"  type="text" value="<?php echo $mas_deposito ?>">
                <input type="text" value="<?php echo $subtotal1 ?>" >
                <input class="segundoCampo" type="text" value="<?php echo $subtotal2 ?>">
                <input type="text" value="<?php echo $saldoLibro ?>">
            </div>
        </div>
        <hr>
        <div class="content2">
            <div class="textos2">
                <label class="tituloSaldo">SALDO EN BANCO AL</label>
                <label class="text2"> Más: Depósitos en Tránsito </label>
                <label class="text2"> Menos: Cheques en Circulación </label>
                <label class="text2"> Más: Ajustes </label>
                <label class="subtotalTitulo"> SALDO CONCILIADO IGUAL A BANCO AL </label>
            </div>
            <div class="campos4">
                <input class="campo2_1" type="text" value="<?php echo $depositoTransito?>" >
                <input type="text"  value="<?php echo $chequesCirculacion?>">
                <input type="text"  value="<?php echo $ajusteBanco?>">
                <label class="subtotalCampos1"> Subtotal </label>
            </div>
            <div class="campos3">

                <input class="campos3_1" type="text" value="<?php echo $saldoBanco?>">
                <input type="text"  value="<?php echo $chequesCirculacion?>">
                <input type="text"  value="<?php echo $saldoBanco?>">
            

            </div>
        </div>
        <hr>
        <div class="botones">
            <button class="boton1" type="button"> Grabar </button>
            <button type="button"> Nuevo </button>
        </div>
    </div>
    </form>
</body>
</html>