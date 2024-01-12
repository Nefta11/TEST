<?php
    
    //Variables de conexion con el servidor

    $DATABASE_HOST='localhost';
    $DATABASE_USER='root';
    $DATABASE_PASS='';
    $DATABASE_NAME='estacionamiento';
    $DATABASE_PORT='3307';
    //Conexion con la base de datos
    $conexion=mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

    if(mysqli_connect_error()){
        exit('Error de conexion con mysql:'.mysqli_connect_error());
    }else{
       // echo('conexion exitosa');
    }
?>