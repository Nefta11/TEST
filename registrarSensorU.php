<?php
include 'conexion.php';
$distancia=$_POST['distancia'];
date_default_timezone_set('America/Mexico_City');           
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$status=$_POST['status'];

$con="INSERT INTO sensor_ultrasonico (distancia,fecha,hora,status) VALUES ('".$distancia."','".$fecha."','".$hora."','".$status."')";

if($datos=mysqli_query($conexion,$con)){
    echo "Datos guardados correctamente";
} else {
    echo "Error, no se guardo correctamente";
}
?>