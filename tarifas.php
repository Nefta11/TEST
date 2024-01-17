<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar Tarifas</title>
</head>
<body>



    <form class="contenedorform" action="procesar_tarifas.php" method="post">
    <h1>Registrar Tarifas</h1>
        <p>Ingresa los datos de la tarifa</p>


        <div class="form-outline mb-4">
            <label class="form-label" for="id_tarifa">ID_TARIFA:</label>
            <select name="id_tarifa" id="id_tarifa" required>
                <option value="">Selecciona ID_TARIFA</option>

                <option value="tarifa1">Tarifa 1</option>
                <option value="tarifa2">Tarifa 2</option>
                <option value="tarifa3">Tarifa 3</option>
            </select>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="tarifa">Tarifa:</label>
            <input type="text" id="tarifa" name="tarifa" placeholder="Ingrese la tarifa" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="monto">Monto:</label>
            <input type="text" id="monto" name="monto" placeholder="Ingrese el monto" required>
        </div>

        <input type="submit" value="Registrar">
    </form>

</body>
</html>
