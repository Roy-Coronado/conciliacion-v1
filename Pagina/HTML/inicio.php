<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio </title>

    <!-- <link rel="stylesheet" href="http://localhost/Conciliacion/Pagina/ESTILOS/inicio.css"> -->
    <link rel="stylesheet" href="../ESTILOS/inicio.css">

</head>

<body>

    <header>
        <h2 class="logo"> Conciliación </h2>

        <nav class="menu">

            <a href="#" onclick="cargarPagina('inicio2')"> Inicio </a>
            <a href="#" onclick="cargarPagina('cheque')"> Cheques </a>
            
            <select onchange="seleccionarOpcion(this)">

                <option class="opcion1" value="null"> Operaciones Cks </option>
                <option class="opcion1" value="anulacion"> Anulación </option>
                <option class="opcion1" value="sacarDeCirculacion"> Sacar de Circulación </option>
                
            </select>


            <a href="#" onclick="cargarPagina('otrasTrans')"> Otras Transacciones </a>
            <a href="#" onclick="cargarPagina('conciliacion')"> Conciliación </a>
            <a href="#" onclick="cargarPagina('reportes')"> Reportes </a>
            <a href="#" onclick="cargarPagina('Mantenimiento')"> Mantenimiento </a>

        </nav>
    </header>


    <main id="contenido">

        
        

    </main>

    <script src="http://localhost/Conciliacion/Pagina/FUNCIONES/script.js"></script>
</body>


</body>

</html>