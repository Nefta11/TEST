s<?php
session_start();
if (!isset($_SESSION['loggedin'])){
    echo '<script language="javascript>alert("Tienes que acceder con tu usuario y contraseña");location.href ="index.php";</script>';
}