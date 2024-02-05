<?php
include 'conexion.php';

$idVehiculo = $_POST['id_vehiculo'];
$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$puertas = $_POST['puertas'];
$tipo = $_POST['tipo'];
$idCliente = $_POST['id_cliente'];

$query = "UPDATE vehiculo SET matricula='" . $matricula . "', modelo='" . $modelo . "',
color='" . $color . "', puertas='" . $puertas . "', tipo='" . $tipo . "', id_cliente='" . $idCliente . "' WHERE id_vehiculo='" . $idVehiculo . "'";

if ($datos = mysqli_query($conexion, $query)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar";
    echo $query;
}
?>
