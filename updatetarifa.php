<?php
include 'conexion.php';

$idTarifa = $_POST['id_tarifa'];
$tarifa = $_POST['tarifa'];
$monto = $_POST['monto'];

$query = "UPDATE tarifa SET tarifa='" . $tarifa . "', monto='" . $monto . "' WHERE id_tarifa='" . $idTarifa . "'";

if ($datos = mysqli_query($conexion, $query)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar";
    echo $query;
}
?>
