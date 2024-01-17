<?php
include 'conexion.php';
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

echo $nombre.$direccion.$telefono.$correo;

$con="INSERT INTO cliente (nombre,direccion,telefono,correo)VALUES('".$nombre."','".$direccion"','".$telefono"','".$correo."')";


?>