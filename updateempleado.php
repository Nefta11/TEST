<?php
include 'conexion.php';

$idEmpleado = $_POST['id_empleado'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "UPDATE empleados SET 
    nombre='" . $nombre . "', 
    direccion='" . $direccion . "', 
    telefono='" . $telefono . "', 
    correo='" . $correo . "', 
    usuario='" . $usuario . "', 
    contrasena='" . $contrasena . "' 
    WHERE id_empleado='" . $idEmpleado . "'";

if ($datos = mysqli_query($conexion, $query)) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar";
    echo $query;
}
?>
