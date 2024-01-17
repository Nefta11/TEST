<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar Cliente</title>
</head>
<body>



    <form class="contenedorform" id="frmclientes" name="frmclientes">
    <h1>Cliente</h1>
        <p>Ingresa los datos del cliente</p>
        

        <div class="form-outline mb-4">
            <label class="form-label" for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" placeholder="Correo" required>
        </div>

        <input type="submit" value="Registrar" onclick="registrarCliente()">
    </form>

</body>
</html>
