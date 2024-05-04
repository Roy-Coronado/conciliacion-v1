<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="stylesheet" href="/Conciliacion/css/conciliacion.css">

    <title> Conciliacion </title>

</head>

<body>

    <div class="contenido">

        <div class="titulo">

            <h2> Conciliacion Bancaria </h2>

        </div>

        <div class="content">

            <div class="textos">

                <div class="primerosCampos">

                    <label for="">Mes</label>
                    <input type="datetime" name="" id="">

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
                <input class="inputDate" type="datetime" name="" id="">

                <input type="text" name="" id="">
                <input type="text" name="" id="">
                <input type="text" name="" id="">
                <input type="text" name="" id="">

                <label class="subtotalCampos1"> Subtotal </label>

                <input type="text" name="" id="">
                <input type="text" name="" id="">
                <input type="text" name="" id="">

                <label class="subtotalCampos1"> Subtotal </label>

            </div>

            <div class="campos2">

                <button type="text"> Realizar Conciliacion </button>
                <input type="text" name="" id="">

                <input class="primerCampo" type="text">
                <input type="text">

                <input class="segundoCampo" type="text">
                <input type="text">

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

                <input class="campo2_1" type="text" name="" id="">
                <input type="text" name="" id="">
                <input type="text" name="" id="">

                <label class="subtotalCampos1"> Subtotal </label>

            </div>

            <div class="campos3">

                <input class="campos3_1" type="text" name="" id="">

                <input type="text">
                <input type="text">

            </div>

        </div>

        <hr>

        <div class="botones">

            <button class="boton1" type="button"> Grabar </button>
            <button type="button"> Nuevo </button>

        </div>

    </div>

</body>

</html>