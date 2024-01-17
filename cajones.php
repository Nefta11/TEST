<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar uso de estacionamiento</title>
</head>
<body>


    <form class="contenedorform" action="login.php" method="post">
    <h1>Cajon</h1>
        <p>Ingresa los datos del cajon</p>
        
        <div class="form-outline mb-4">
            <label class="form-label" for="id_cajon">ID_CAJON</label>
            <select name="id_cajon" id="id_cajon" required>
                <option value="">Selecciona ID_CAJON</option>
                
                <option value="cajon1">Cajon 1</option>
                <option value="cajon2">Cajon 2</option>
                <option value="cajon3">Cajon 3</option>
            </select>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="numero">Número</label>
            <input type="text" id="numero" name="numero" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="status">Status</label>
            <input type="text" id="status" name="status" required>
        </div>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
