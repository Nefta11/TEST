<?php
include 'conexion.php';
$id_registro= $_POST['id_registro'];
$id_vehiculo = $_POST['id_vehiculo'];
$id_cajon = $_POST['id_cajon'];
$id_tarifa = $_POST['id_tarifa'];
$id_empleado = $_POST['id_empleado'];
date_default_timezone_set('America/Mexico_City');           
$fechaingreso = date("Y-m-d");
$horaingreso = date("H:i:s");


$stmt =$conexion->prepare( "UPDATE registro SET id_vehiculo = '".$id_vehiculo."', id_cajon = '".$id_cajon.",id_empleado = '".$id_empleado.",id_tarifa = '".$id_tarifa."', fechaingreso = '".$fechaingreso."', horaingreso = '".$horaingreso."' WHERE id_registro ='".$id_registro."'");

$result = $stmt->execute();
if ($result) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conexion->close();
?>