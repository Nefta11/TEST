<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar uso de estacionamiento</title>
</head>
<body>

    <h1>Registrar uso de estacionamiento</h1>

    <form class="contenedorform" action="procesar_registro.php" method="post">
        <p>Ingresa los datos del estacionamiento</p>
        
        <!-- Campo de selección para ID_VEHICULO -->
        <div class="form-outline mb-4">
            <label class="form-label" for="id_vehiculo">Vehiculo</label>
            <select name="id_vehiculo" id="id_vehiculo" required>
                <option value="">Selecciona ID_VEHICULO</option>
                <!-- Agrega opciones según sea necesario -->
                <option value="vehiculo1">Vehiculo 1</option>
                <option value="vehiculo2">Vehiculo 2</option>
                <option value="vehiculo3">Vehiculo 3</option>
            </select>
        </div>

        <!-- Campo de selección para ID_CAJON -->
        <div class="form-outline mb-4">
            <label class="form-label" for="id_cajon">Cajones</label>
            <select name="id_cajon" id="id_cajon" required>
                <option value="">Selecciona a un cajon</option>
                <!-- Agrega opciones según sea necesario -->
                <option value="cajon1">Cajon 1</option>
                <option value="cajon2">Cajon 2</option>
                <option value="cajon3">Cajon 3</option>
            </select>
        </div>

        <!-- Campo de fecha de ingreso -->
        <div class="form-outline mb-4">
            <label class="form-label" for="fecha_ingreso">Fecha de Ingreso</label>
            <input type="date" id="fechaIngreso" name="fechaIngreso" required>
        </div>

        <!-- Campo de hora de ingreso -->
        <div class="form-outline mb-4">
            <label class="form-label" for="hora_ingreso">Hora de Ingreso</label>
            <input type="time" id="horaIngreso" name="horaIngreso" required>
        </div>

        <!-- Campo de fecha de salida -->
        <div class="form-outline mb-4">
            <label class="form-label" for="fecha_salida">Fecha de Salida</label>
            <input type="date" id="fechaSalida" name="fechaSalida" required>
        </div>

        <!-- Campo de hora de salida -->
        <div class="form-outline mb-4">
            <label class="form-label" for="hora_salida">Hora de Salida</label>
            <input type="time" id="horaSalida" name="horaSalida" required>
        </div>

        <!-- Campo de selección para ID_EMPLEADO -->
        <div class="form-outline mb-4">
            <label class="form-label" for="id_empleado">Empleado</label>
            <select name="id_empleado" id="id_empleado" required>
                <option value="">Selecciona ID_EMPLEADO</option>
                <!-- Agrega opciones según sea necesario -->
                <option value="empleado1">Empleado 1</option>
                <option value="empleado2">Empleado 2</option>
                <option value="empleado3">Empleado 3</option>
            </select>
        </div>

        <!-- Campo de selección para ID_TARIFA -->
        <div class="form-outline mb-4">
            <label class="form-label" for="id_tarifa">Tarifa</label>
            <select name="id_tarifa" id="id_tarifa" required>
                <option value="">Selecciona ID_TARIFA</option>
                <!-- Agrega opciones según sea necesario -->
                <option value="tarifa1">Tarifa 1</option>
                <option value="tarifa2">Tarifa 2</option>
                <option value="tarifa3">Tarifa 3</option>
            </select>
        </div>

        <!-- Agrega más campos según sea necesario -->

        <!-- Botón de envío -->
        <input type="submit" value="Registrar">
    </form>

</body>
</html>
