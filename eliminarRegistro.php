<?php
include 'conexion.php';

$idRegistro = $_POST["id_registro"];

$sql = "DELETE FROM registro WHERE id_registro='".$idRegistro."'";

if($datos = mysqli_query($conexion, $sql)){
    echo "Registro eliminado correctamente";
} else {
    echo "Error al eliminar el registro";
}
?>
