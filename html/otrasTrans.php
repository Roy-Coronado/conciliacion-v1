<?php include "../consultas/guardarTransaccion.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/otrasTrans.css">
    <script src="../js/script.js"></script>
    <title>Otras Transacciones</title>
</head>

<body>
    <main id="mainTransacciones">
        <div class="contenedor">
            <form action="" method="post" onsubmit="validarCamposOtrasTransacciones(event);">
                <div class="titulo">
                    <h2>Otras Transacciones - Depositos, Ajustes y Notas (Db / Cr)</h2>
                </div>
                <div class="todo">
                    <div class="campo1">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha">
                    </div>
                    <div class="campo2">
                        <label for="transaccion">Transacción</label>
                        <select name="transaccion" id="transaccion">
                            <?php include '../consultas/transaccionesConsulta.php'; obtenerOpcionesTransacciones($conect); ?>
                        </select>
                        <label for="monto">Monto</label>
                        <input type="text" name="monto" id="monto" onkeydown="return soloNumeros(event)">
                        <div class="botones">
                            <button type="submit">Grabar</button>
                            <button type="reset">Nuevo</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
<script>
        function limpiarCampos() {
            document.getElementById("fecha").value = "";
            document.getElementById("transaccion").selectedIndex = 0;
            document.getElementById("monto").value = "";
        }
    </script>
</html>