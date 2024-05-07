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


function soloNumerosHT(event) {
    var code = event.keyCode;

    if (code >= 48 && code <= 57 || code == 8) { // 0-9 y Retroceso
        return true;
    } else {
        return false;
    }
}

function soloNumeros(event) {
    var code = event.keyCode;

    if (code >= 48 && code <= 57 || code == 8 || code == 190 || code == 37 || code == 38 || code == 39) { // 0-9 y Retroceso
        return true;
    } else {
        return false;
    }
}

function soloDecimal(evento) {
    var code = (evento.which) ? evento.wich : evento.keyCode;

    if (code == 8) {
        return true;
    } else if (code == 46 || code >= 48 && code <= 57) {
        return true
    } else {
        return false;
    }
}

function validarDecimal(input) {
    const texto = input.value;
    const puntosIngresados = texto.split('.').length - 1;

    if (puntosIngresados > 1) {
        input.value = texto.slice(0, -1);
    }

    const partesDespuesDelPunto = texto.split('.');
    if (partesDespuesDelPunto.length === 2 & partesDespuesDelPunto[1].length > 2) {
        input.value = partesDespuesDelPunto[0] + '.' + partesDespuesDelPunto[1].slice(0, 2);
    }
}

function limitarLongitud(input, maxLength) {
    if (input.value.length > maxLength) {
        input.value = input.value.slice(0, maxLength);
    }
}

function soloLetras(evento) {
    var code = (evento.which) ? evento.which : evento.keyCode;

    if (code == 8 || code == 32) { // Retroceso y espacio
        return true;
    } else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122) || (code == 37 || code == 38 || code == 39)) { // Letras a-z y A-Z
        return true;
    } else if (code == 186) {
        return false;
    } else {
        return false;
    }
}



//numeros a letras//
function numeroALetras(numero) {
    const unidades = ['', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];
    const especiales = ['diez', 'once', 'doce', 'trece', 'catorce', 'quince', 'dieciséis', 'diecisiete', 'dieciocho', 'diecinueve'];
    const decenas = ['', '', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'];
    const centenas = ['', 'cientos', 'doscientos', 'trescientos', 'cuatrocientos', 'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos'];
    const miles = ['', 'mil', 'millón'];

    let letras = '';

    if (numero >= 1000000) {
        letras += numeroALetras(Math.floor(numero / 1000000)) + ' ' + miles[2] + ' ';
        numero %= 1000000;
    }
    if (numero >= 1000) {
        if (numero >= 1000 && numero <= 1999) {
            letras += 'mil ';
        } else if (numero >= 2000 && numero <= 9999) {
            letras += numeroALetras(Math.floor(numero / 1000)) + ' ' + miles[1] + ' ';
        } else {
            letras += numeroALetras(Math.floor(numero / 1000)) + ' ' + miles[1] + ' ';
        }
        numero %= 1000;
    }
    if (numero >= 100) {
        if (numero === 100) {
            letras += 'cientos ';
        } else {
            letras += centenas[Math.floor(numero / 100)] + ' ';
        }
        numero %= 100;
    }
    if (numero >= 10 && numero <= 19) {
        letras += especiales[numero - 10];
        numero = 0;
    } else if (numero >= 10) {
        letras += decenas[Math.floor(numero / 10)] + ' ';
        numero %= 10;
    }
    if (numero > 0) {
        letras += unidades[numero];
    }

    return letras.trim();
}
function mostrarMontoEnLetras() {
    var monto = document.getElementById("montoPagar").value;
    var parteEntera = Math.floor(monto);
    var parteDecimal = Math.round((monto - parteEntera) * 100);
    var montoEnLetras = numeroALetras(parteEntera) + ' balboas con ' + (parteDecimal < 10 ? '0' : '') + parteDecimal + '/100';
    console.log(montoEnLetras);
    document.getElementById("montoLetras").value =  montoEnLetras;
}