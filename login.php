<?php
    include 'conexion.php';
    session_start();

    // Validar si se reciben parametros del metodo POST
    if(!isset($_POST['usuario'],$_POST['contrasena'])){
        header('Location:index.php');
    }

    //Evitar inyección SQL
    if($stmt=$conexion->prepare('SELECT usuario, contrasena FROM empleados WHERE usuario=?')){
        $stmt->bind_param('s', $_POST['usuario']);
        $stmt->execute();
    }

    // Verificar si lo ingresado coincide con la BD
    $stmt->store_result();
    if($stmt->num_rows>0){
        $stmt->bind_result($usuario, $contrasena);
        $stmt->fetch();

        //se confirma que la cuenta existe ahora validamos la contraseña
        if($_POST['contrasena']===$contrasena){
            session_regenerate_id();
            $_SESSION['loggedin']=TRUE;
            $_SESSION['name']=$_POST['usuario'];
            $_SESSION['id']=$id;
            header('Location:menu.php');
        }else{
            //En caso de que la contraseña sea incorrecta
            echo '<script language="javascript">alert("Contraseña Incorrecta"); window.location="index.php";</script>';
        }
    }else{
        echo '<script language="javascript">alert("Usuario Incorrecta"); windows.location.href="index.php"</script>';
    }$stmt->close();
?>