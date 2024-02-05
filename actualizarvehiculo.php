<?php
include 'conexion.php';

$idVehiculo = $_POST['id_vehiculo'];

// Obtener datos del vehículo
$query = "SELECT * FROM vehiculo WHERE id_vehiculo='" . $idVehiculo . "'";
$ejecutar = $conexion->query($query);

while ($result = $ejecutar->fetch_array()) {
    ?>
    <h2>Actualizar Vehículo</h2>
    <hr>
    <form id="frmVehiculo" name="frmVehiculo">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="matricula">Matricula</label>
                <input type="text" class="form-control" name="matricula" id="matricula" value="<?php echo $result['matricula']; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="modelo" value="<?php echo $result['modelo']; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="color">Color</label>
                <input type="color" class="form-control" name="color" id="color" value="<?php echo $result['color']; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="puertas">Puertas</label>
                <input type="number" class="form-control" name="puertas" id="puertas" value="<?php echo $result['puertas']; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" value="<?php echo $result['tipo']; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="id_cliente">ID Cliente</label>
                <select class="form-control" id="id_cliente" name="id_cliente">
                    <?php
                    $queryClientes = "SELECT id_cliente, nombre FROM cliente";
                    $ejecutarClientes = $conexion->query($queryClientes);
                    while ($resultClientes = $ejecutarClientes->fetch_array()) {
                        $selected = ($result['id_cliente'] == $resultClientes['id_cliente']) ? 'selected' : '';
                        echo "<option value='" . $resultClientes['id_cliente'] . "' " . $selected . ">" . $resultClientes['nombre'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" onclick="cancelar();" class="btn btn-danger btn-block" value="Cancelar"></input>
            <input type="button" onclick="actualizarVehiculo(<?php echo $idVehiculo; ?>);" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
<?php
}
?>
