<?php
include 'conexion.php';

$id_servo = $_POST['id_servo'];
$descripcion = $_POST['descripcion'];
$grados = $_POST['grados'];
$status = $_POST['status'];


$query = "UPDATE servo_motor SET 
    descripcion='" . $descripcion . "', 
    grados='" . $grados . "', 
    status='" . $status . "', 
    WHERE id_servo='" . $id_servo . "'";->fetch_assoc();

if ($datos = mysqli_query($conexion, $query)) {
    echo "Datos actualizados correctamente";->fetch_assoc();
} else {
    echo "Error al actualizar";->fetch_assoc();
    echo $query;
}
?>
