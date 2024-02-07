<?php
include 'conexion.php';

$idservo = $_POST['id_servo'];

$query = "SELECT * FROM servo_motor WHERE id_servo='" . $idservo . "'";
$ejecutar = $conexion->query($query);

while ($result = $ejecutar->fetch_array()) {
    ?>
    <h2>Actualizar Servo Motor</h2>
    <hr>
    <form id="frmServo" name="frmServo">
    <div class="form-group col-md-4">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion"  value="<?php echo $result['descripcion']; ?>">
            </div>

            <div class="form-group col-md-4">
                <label for="grados">Grados</label>
                <input type="number" class="form-control" id="grados" name="grados"  value="<?php echo $result['grados']; ?>">
            </div>

            <div class="form-group col-md-4">
                <label for="status">Estatus</label>
                <select class="form-control" id="status" name="status"  value="<?php echo $result['status']; ?>">
                <option value="0">0</option>
                <option value="1">1</option>
                </select>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
            <input type="button" onclick="cancelar();" class="btn btn-danger btn-block" value="Cancelar"></input>
            <input type="button" onclick="actualizarServo(<?php echo $idservo; ?>);" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
<?php
}
?>
