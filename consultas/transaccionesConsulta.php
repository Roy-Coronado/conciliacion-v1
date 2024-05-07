
<?php
include '../conexion/conciliacion.php';

function obtenerOpcionesTransacciones($conect) {
    $sql = "SELECT codigo, detalle FROM transacciones ORDER BY codigo";
    $resultado = $conect->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        $grupo_actual = '';
        while ($fila = $resultado->fetch_assoc()) {
            $codigo = $fila['codigo'];
            $detalle = $fila['detalle'];

            // Determinar el grupo para esta transacción
            $grupo = '';
            if ($codigo <= 5) {
                $grupo = 'LIBRO';
            } elseif ($codigo <= 7) {
                $grupo = 'BANCO';
            } else {
                $grupo = 'TRANFERENCIAS';
            }

            // Si el grupo cambió, cerrar el grupo anterior y abrir uno nuevo
            if ($grupo != $grupo_actual) {
                if ($grupo_actual != '') {
                    echo '</optgroup>';
                }
                echo '<optgroup label="' . $grupo . '">';
                $grupo_actual = $grupo;
            }

            // Generar la opción de selección HTML con el detalle de la transacción
            echo '<option value="' . $codigo . '">' . $detalle . '</option>';
        }

        // Cerrar el último grupo
        echo '</optgroup>';
    } else {
        echo '<option value="">No se encontraron transacciones</option>';
    }
}
?>