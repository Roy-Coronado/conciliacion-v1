<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Conciliacion/css/anulacion.css">

    <title> Conciliacion Bancaria </title>

</head>

<body>
    
    <div class="contenido">

        <h2 class="tituloCreacion"> Anulacion de Cheques </h2>

        <div class="cheques">

            <div class="campos">

                <label> No. de Cheque </label> <br>

                <input type="text" name="" id="">
                <button type="button">Buscar</button>

            </div>

            <div class="segundoCampoCheque">

                <label> Fecha: </label> <br>
                <input type="date" name="" id=""> <br> <br>

                <label> Paguese a orden de: </label> <br>
                <input class="ordenPrimerCampo" type="text" name="" id=""> <br> <br>
               
                <label> La suma de: </label>  <br>
                <input class="sumaPrimerCampo" type="text" name="" id=""> <br> <br>

                <label> Descripcion de gastos: </label> <br>
                <input class="detalleCampo" type="text" name="" id="">

            </div>

        </div>

        <div class="gastos">

            <div class="objeto">

                <label> Fecha Anulacion: </label> <br>
                <input type="date" name="" id="">

            </div>

            <div class="camposObjeto">

                <label for=""> Detalle Anulacion: </label> <br>
                <textarea class="areaDetalle" name="" id="" cols="0" rows="0"></textarea>

            </div>

        </div>

        <div class="botones">

            <button type="button"> Anular </button>

        </div>

    </div>

</body>

</html>