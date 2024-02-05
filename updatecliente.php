<?php
include 'conexion.php';

$idcliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['numero']; // Se corrigió de 'telefono' a 'numero'
$correo = $_POST['correo'];

$query = "UPDATE cliente SET nombre='" . $nombre . "', direccion='" . $direccion . "',
telefono='" . $telefono . "', correo='" . $correo . "' WHERE id_cliente='" . $idcliente . "'";

if ($datos = mysqli_query($conexion, $query)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar";
    echo $query;
}
?>
