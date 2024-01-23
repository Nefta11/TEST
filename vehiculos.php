o<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar Vehículo</title>
</head>
<body>


    <form class="contenedorform" id="frmvehiculo" name="frmvehiculos">
        
    <h1>Registrar Vehículo</h1>
        <p>Ingresa los datos del vehículo</p>

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
            <label class="form-label" for="Id_cliente">Cliente:</label>
            <select name="Id_cliente" id="Id_cliente" required>
                <option value="">Selecciona ID_CLIENTE</option>

                <?php
                    include 'conexion.php';
                    $query="SELECT Id_cliente,nombre FROM cliente";
                    $ejecutar=$conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                    echo "<option value='".$result['Id_cliente']."'>".$result
                    ['nombre']."</option>";
                    }
                ?>

            </select>
        </div>

        <input type="button" value="Registrar" onclick="registrarVehiculo();">
    </form>

</body>
</html>
