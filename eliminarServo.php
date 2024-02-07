<?php
include 'conexion.php';
$idservo = $_POST["id_servo"];

$sql = "DELETE FROM servo_motor WHERE id_servo='".$idservo."'";

if($datos =mysqli_query($conexion, $sql)){
    echo "Servo-Motor eliminado correctamente";

}else {
    echo "Error al eliminar Servo-Motor";
}
?>