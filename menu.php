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
    <script src="scripts/js/funciones.js"></script>
    <script src="scripts/js/jquery.min.js"></script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #F2E0DF, #a473b9, #9c71db, #ca93c4);
        }

        #header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        #menu-icon {
            font-size: 32px;
            cursor: pointer;
            position: fixed;
            top: 15px;
            left: 15px;
        }

        #menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(to right, #F2E0DF, #a473b9, #9c71db, #ca93c4);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 60px;
            height: 100vh;
            width: 23vw;
            z-index: 1;
        }

        #close-menu-icon {
            font-size: 24px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        #menu a {
            display: block;
            margin-bottom: 30px;
            color:black; /* Color de texto blanco para contrastar */
            text-decoration: none;
            font-size: 26px;
        }

        #menu a i {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Panel de Información</h1>
    </div>

    <div id="menu-icon">&#9776;</div>

    <div id="menu">
        <div id="close-menu-icon" onclick="closeMenu()">&#10005;</div>
        <a href="#" onclick="cargarDiv('#contenido','inicio.php');"><i class="fas fa-home"></i> Inicio</a>
        <a href="#" onclick="cargarDiv('#contenido','registrar.php');"><i class="fas fa-user-plus"></i> Registro</a>
        <a href="#" onclick="cargarDiv('#contenido','cajones.php');"><i class="fas fa-car"></i> Cajones</a>
        <a href="#" onclick="cargarDiv('#contenido','clientes.php');"><i class="fas fa-users"></i> Clientes</a>
        <a href="#" onclick="cargarDiv('#contenido','vehiculos.php');"><i class="fas fa-car"></i> Vehículos</a>
        <a href="#" onclick="cargarDiv('#contenido','tarifas.php');"><i class="fas fa-dollar-sign"></i> Tarifas</a> <!-- Icono de dólar para tarifas -->
        <a href="#" onclick="cargarDiv('#contenido','encargados.php');"><i class="fas fa-user-tie"></i> Encargados</a>
        <a href="#" onclick="cargarDiv('#contenido','reportes.php');"><i class="fas fa-chart-bar"></i> Reportes</a>
        <a href="logout.php" ><i class="fas fa-sign-out-alt"></i> Salir</a>
    </div>

    <div id="contenido">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At recusandae totam architecto deleniti eveniet quidem, odio ut quas reprehenderit. Sequi odit labore fugit laboriosam alias suscipit atque nihil necessitatibus corporis?</p>
        <p></p>
        <p></p>
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
