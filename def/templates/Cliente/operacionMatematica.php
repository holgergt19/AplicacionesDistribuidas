<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <input type="number" id="numero1" placeholder="Número 1">
    <input type="number" id="numero2" placeholder="Número 2">
    <select id="operacion">
        <option value="suma">Suma</option>
        <!-- Otras opciones para diferentes operaciones matemáticas -->
    </select>
    <button onclick="realizarOperacion()">Calcular</button>
    <div id="resultado"></div>

    <script>
        function realizarOperacion() {
            const numero1 = document.getElementById('numero1').value;
            const numero2 = document.getElementById('numero2').value;
            const operacion = document.getElementById('operacion').value;

            fetch(`/operacion/${numero1}/${numero2}/${operacion}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('resultado').innerText = `Resultado: ${data.resultado}`;
                })
                .catch(error => {
                    document.getElementById('resultado').innerText = 'Error al realizar la operación.';
                });
        }
    </script>
</body>
</html>
