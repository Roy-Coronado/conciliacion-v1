```html
<!DOCTYPE html>
<html>
<head>
    <title>Conciliación</title>
</head>
<body>
    <h1>Conciliación</h1>
    <form>
        <label for="mes">Mes:</label>
        <select id="mes">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>

        <label for="anio">Año:</label>
        <select id="anio">
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
        </select>

        <br><br>

        <label for="saldo_banco">Saldo en Banco:</label>
        <input type="text" id="saldo_banco">

        <br><br>

        <button type="button" onclick="realizarConciliacion()">Realizar Conciliación</button>

        <br><br>

        <table>
            <tr>
                <th>Libro</th>
                <th>Banco</th>
            </tr>
            <tr>
                <td><input type="text" id="saldo_anterior_libro" disabled></td>
                <td><input type="text" id="saldo_anterior_banco" disabled></td>
            </tr>
            <tr>
                <td><input type="text" id="depositos_libro" disabled></td>
                <td><input type="text" id="depositos_banco" disabled></td>
            </tr>
            <tr>
                <td><input type="text" id="cheques_libro" disabled></td>
                <td><input type="text" id="cheques_banco" disabled></td>
            </tr>
            <tr>
                <td><input type="text" id="total_libro" disabled></td>
                <td><input type="text" id="total_banco" disabled></td>
            </tr>
        </table>
    </form>

    <script>
        function realizarConciliacion() {
            // Aquí iría la lógica para obtener y calcular los datos de la conciliación
            // y llenar los campos correspondientes
        }
    </script>
</body>
</html>
