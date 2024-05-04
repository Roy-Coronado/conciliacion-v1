function cargarPagina(pagina) {
    // Carga el contenido de la página solicitada
    fetch(pagina + '.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar la página: ' + response.statusText);
            }
            return response.text();
        })
        .then(data => {
            // Coloca el contenido dentro del div de contenido
            document.getElementById('contenido').innerHTML = data;
        })
        .catch(error => console.error(error));
}

// Función para cargar la página inicial basada en la URL actual
window.onload = function () {
    // Obtiene el identificador de página de la URL
    var pagina = window.location.hash.substr(1);
    cargarPagina(pagina);
}

function seleccionarOpcion(opcion) {
    // Aquí puedes añadir el código para cargar la página según la opción seleccionada
    cargarPagina(opcion.value);
}
