<?php
include 'conexion.php';

$id_registro = $_POST['id_registro'];

date_default_timezone_set('America/Mexico_City');  
$fecha_salida = date("Y-m-d");
$hora_salida = date("H:i:s");

$stmt = $conexion->prepare("UPDATE registro SET fechasalida=?, horasalida=? WHERE id_registro=?");
$stmt->bind_param("sss", $fecha_salida, $hora_salida, $id_registro);

$stmt2 = $conexion->prepare("UPDATE cajon SET status = 0 WHERE id_cajon = (SELECT id_cajon FROM registro WHERE id_registro = ?)");
$stmt2->bind_param("s", $id_registro);

// Ejecutar ambas consultas
$result = $stmt->execute();
$result2 = $stmt2->execute();

if ($result && $result2) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$stmt2->close();
$conexion->close();
?>
