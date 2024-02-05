<?php
include 'conexion.php';

$idTarifa = $_POST['id_tarifa'];

// Obtener datos de la tarifa
$query = "SELECT * FROM tarifa WHERE id_tarifa='" . $idTarifa . "'";
$ejecutar = $conexion->query($query);

while ($result = $ejecutar->fetch_array()) {
    ?>
    <h2>Actualizar Tarifa</h2>
    <hr>
    <form id="frmTarifa" name="frmTarifa">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tarifa">Tarifa</label>
                <input type="number" class="form-control" name="tarifa" id="tarifa" value="<?php echo $result['tarifa']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="monto">Monto</label>
                <input type="number" class="form-control" name="monto" id="monto" value="<?php echo $result['monto']; ?>">
            </div>
        </div>

        <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" onclick="cancelar();" class="btn btn-danger btn-block" value="Cancelar"></input>
            <input type="button" onclick="actualizarTarifa(<?php echo $idTarifa; ?>);" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
<?php
}
?>
