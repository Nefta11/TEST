<?php
include 'conexion.php';

$idVehiculo = $_POST['id_vehiculo'];
$idCajon = $_POST['id_cajon'];
$idTarifa = $_POST['id_tarifa'];
$idEncargado = $_POST['id_empleado'];

// Obtener la fecha y hora actual
$fechaIngreso = date("Y-m-d");
$horaIngreso = date("H:i:s");

// Consulta para insertar el registro
$query = "INSERT INTO registro (id_vehiculo, id_cajon, id_tarifa, id_empleado, fechaIngreso, horaIngreso) 
          VALUES ('$idVehiculo', '$idCajon', '$idTarifa', '$idEncargado', '$fechaIngreso', '$horaIngreso')";

if ($datos = mysqli_query($conexion, $query)) {
    echo "Datos guardados correctamente";
} else {
    echo "Error, no se guardó correctamente";
}
?>
