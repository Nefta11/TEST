<?php
    include 'conexion.php';

    $Id_vehiculo=$_POST['id_vehiculo'];
    $Id_cajon=$_POST['id_cajon'];
    $Id_tarifa=$_POST['id_tarifa'];
    $Id_empleado=$_POST['id_empleado'];
    date_default_timezone_set("America/Mexico_City");
    $fechaingreso=date("y-m-d");
    $horaingreso=date("H:i:s");

    $con="INSERT INTO registro(id_vehiculo, id_cajon, id_empleado, id_tarifa, fechaingreso, horaingreso) 
    VALUE('".$id_vehiculo."','".$id_cajon."','".$id_empleado."','".$id_tarifa."','".$fechaingreso."','".$horaingreso."')";
    
    if($datos=mysqli_query($conexion, $con)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardo correctamente";
    }
?>