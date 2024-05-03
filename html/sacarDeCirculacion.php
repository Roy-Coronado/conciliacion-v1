<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://localhost/Conciliacion/Pagina/ESTILOS/sacarCirculacion.css">

    <title> Conciliacion Bancaria </title>
</head>

<body>

    <div class="contenido">

        <h2 class="tituloCreacion"> Sacar Cheques de Circulación </h2>

        <div class="cheques">

            <div class="campos">

                <label> No. Cheque </label> <br>

                <input type="text" name="" id="">
                <button type="button">Buscar</button>

            </div>



            <div class="segundoCampoCheque">

                <label> Fecha </label> <br>
                <input type="date" name="" id=""> <br> <br>

                <label> Paguese a orden de: </label> <br>
                <input class="ordenPrimerCampo" type="text" name="" id=""> <br> <br>

                <label> La suma de: </label> <br>
                <input class="sumaPrimerCampo" type="text" name="" id=""> <br> <br>

                <label> Descripcion de gastos: </label> <br>
                <input class="detalleCampo" type="text" name="" id="">

            </div>

        </div>



        <div class="gastos">

            <div class="objeto">

                <label> Fecha / Banco </label> <br>
                <input type="date" name="" id="">

                <div class="boton1">

                    <button type="button"> Sacar de Circulación </button>

                </div>


            </div>

        </div>

    </div>

    <script src="script.js"></script>

</body>

</html>