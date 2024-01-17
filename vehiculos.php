<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar Vehículo</title>
</head>
<body>


    <form class="contenedorform" action="procesar_vehiculo.php" method="post">
        
    <h1>Registrar Vehículo</h1>
        <p>Ingresa los datos del vehículo</p>

        <div class="form-outline mb-4">
            <label class="form-label" for="id_vehiculo">ID_VEHICULO:</label>
            <select name="id_vehiculo" id="id_vehiculo" required>
                <option value="">Selecciona ID_VEHICULO</option>
                <option value="vehiculo1">Vehiculo 1</option>
                <option value="vehiculo2">Vehiculo 2</option>
                <option value="vehiculo3">Vehiculo 3</option>
            </select>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" placeholder="Ingrese la matrícula" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" placeholder="Ingrese el modelo" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="color">Color:</label>
            <input type="text" id="color" name="color" placeholder="Ingrese el color" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="puertas">Puertas:</label>
            <input type="number" id="puertas" name="puertas" placeholder="Número de puertas" required>
        </div>


        <div class="form-outline mb-4">
            <label class="form-label" for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" placeholder="Ingrese el tipo" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="id_cliente">Cliente:</label>
            <select name="id_cliente" id="id_cliente" required>
                <option value="">Selecciona ID_CLIENTE</option>

                <option value="cliente1">Cliente 1</option>
                <option value="cliente2">Cliente 2</option>
                <option value="cliente3">Cliente 3</option>
            </select>
        </div>

        <input type="submit" value="Registrar">
    </form>

</body>
</html>
