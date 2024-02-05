<?php
include 'conexion.php';

$idEmpleado = $_POST['id_empleado'];

// Obtener datos del empleado
$query = "SELECT * FROM empleados WHERE id_empleado='" . $idEmpleado . "'";
$ejecutar = $conexion->query($query);

while ($result = $ejecutar->fetch_array()) {
    ?>
    <h2>Actualizar Empleado</h2>
    <hr>
    <form id="frmEmpleado" name="frmEmpleado">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $result['nombre']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $result['direccion']; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="numero">Teléfono</label>
                <input type="text" class="form-control" name="numero" id="numero" value="<?php echo $result['telefono']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo" value="<?php echo $result['correo']; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $result['usuario']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" name="contrasena" id="contrasena" value="<?php echo $result['contrasena']; ?>">
            </div>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" onclick="cancelar();" class="btn btn-danger btn-block" value="Cancelar"></input>
            <input type="button" onclick="actualizarEmpleado(<?php echo $idEmpleado; ?>);" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
<?php
}
?>
