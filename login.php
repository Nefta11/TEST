<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar password</title>
    <script src="./scripts/js/sweetalert.min.js"></script>
    <script src="./scripts/js/funciones.js"></script>
    
</head>
<body>
<?php
    include 'conexion.php';
    session_start();
    
    // Verificar si se reciben parámetros del método POST
    if (!isset($_POST['usuario'], $_POST['contrasena'])) {
        header('Location: index.php');
    } 
    
    if ($stmt = $conexion->prepare('SELECT id_empleado, correo, usuario, contrasena FROM empleados WHERE usuario=?')) {
        // Parámetro de enlace de la cadena 
        $stmt->bind_param('s', $_POST['usuario']);
        $stmt->execute();

        // Verificar si lo ingresado coincide con la BD
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id_empleado, $correo, $usuario, $contrasena);
            $stmt->fetch();
            if ($_POST['contrasena'] === $contrasena) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['usuario'];
                $_SESSION['id'] = $id_empleado;
                $_SESSION['correo'] = $correo;
                header('Location: menu.php');
            } else {
                echo '<script language="javascript">msjPasswordError()</script>';
            }
        } else {
            echo '<script language="javascript">msgError()</script>';
        }
        $stmt->close();
    }
?>
</body>
</html>
