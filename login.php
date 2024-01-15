<?php

    include 'conexion.php';
    session_start();

    //validar si se reciben parametros del metodo POST
    if(!isset($_POST['usuario'],$_POST['contrasena'])){
        header('location:index.php');
    }
    
    //evitar inyeccion sql
    if($stmt=$conexion->prepare('SELECT usuario, contrasena FROM empleados WHERE usuario=?')){
        //Parametro de enlace de la cadena s
        $stmt->bind_param('s',$_POST['usuario']);
        $stmt->execute();
    }

    
    //Verificar si lo ingresado coincide con algun valor de la base de datos

    $stmt->store_result();
    
    if($stmt->num_rows>0){
        $stmt->bind_result($usuario,$contrasena);
        $stmt->fetch();
        if($_POST['contrasena']===$contrasena){
            session_regenerate_id();
            $_SESSION['loggedin']=TRUE;
            $_SESSION['name']=$_POST['usuario'];
            $_SESSION['id']=$id;
            header('Location:menu.php');
        }else{
            echo '<script language="javascript">alert("contraseña incorrecta"); location.href="index.php"</ script>';
        }
    } else {
        echo '<script language="javascript">alert("Usuario incorrecta"); location.href="index.php"</ script>';
    }

    $stmt->close();
?>