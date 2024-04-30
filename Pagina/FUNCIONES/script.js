function cargarPagina(pagina) {

    // Cambia la URL manteniendo "inicio.html#"
    // window.location.hash = pagina;
    // Carga el contenido de la página solicitada
    fetch(pagina + '.php')
        .then(response => response.text())
        .then(data => {
            // Coloca el contenido dentro del div de contenido
            document.getElementById('contenido').innerHTML = data;
        })
        .catch(error => console.error('Error al cargar la página:', error));

    
    // Función para cargar la página inicial basada en la URL actual
    window.onload = function () {
        // Obtiene el identificador de página de la URL
        var pagina = window.location.hash.length(1);
        // Si la URL no tiene un identificador de página, carga la página predeterminada
        if (!pagina) {
            pagina = 'inicio'; // Página predeterminada
        }
        // Carga la página inicial
        cargarPagina(pagina);
    }
}

function seleccionarOpcion(opcion) {
    // Aquí puedes añadir el código para cargar la página según la opción seleccionada
    cargarPagina(opcion.value);
}