<?php
session_start();
if (!isset($_SESSION['loggedin'])){
    echo '<script language="javascript">alert("Tienes que acceder con tu usuario y contraseña");location.href ="index.php";</script>';
    echo '<a href="/logout.php">Cerrar sesión</a>';
    header('Location: index.php');
    exit; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="YOUR-INTEGRITY-CODE" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/estylo.css">
</head>
<body>
    <div id="header">
        <h1>Panel de Información</h1>
    </div>

    <div id="menu-icon">&#9776;</div>

    <div id="menu">
        <div id="close-menu-icon" onclick="closeMenu()">&#10005;</div>
        <a href="#"><i class="fas fa-home"></i> Inicio</a>
        <a href="#"><i class="fas fa-user-plus"></i> Registro</a>
        <a href="#"><i class="fas fa-car"></i> Cajones</a>
        <a href="#"><i class="fas fa-users"></i> Clientes</a>
        <a href="#"><i class="fas fa-car"></i> Vehículos</a>
        <a href="#"><i class="fas fa-dollar-sign"></i> Tarifas</a> <!-- Icono de dólar para tarifas -->
        <a href="#"><i class="fas fa-user-tie"></i> Encargados</a>
        <a href="#"><i class="fas fa-chart-bar"></i> Reportes</a>
        <a href="/logout.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
    </div>

    <script src="https://kit.fontawesome.com/YOUR-KIT-CODE.js" crossorigin="anonymous"></script>

    <script>
        document.getElementById("menu-icon").addEventListener("click", function() {
            var menu = document.getElementById("menu");
            menu.style.display = (menu.style.display === "block") ? "none" : "block";
        });

        function closeMenu() {
            var menu = document.getElementById("menu");
            menu.style.display = "none";
        }
    </script>
</body>
</html>
