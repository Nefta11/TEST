<?php
include "conexion.php";

$humedad = $_GET["humedad"];
$temperatura = $_GET["temperatura"];

date_default_timezone_set('America/Mexico_City');           
$fecha = date("Y-m-d");
$hora = date("H:i:s");
$query = "INSERT INTO humedad (temperatura, humedad, fecha, hora) VALUES ('$temperatura', '$humedad', '$fecha', '$hora')";

if(mysqli_query($conexion, $query)) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Temperatura</th>
                <th scope="col">Humedad</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT id_sensorH, temperatura, humedad, fecha, hora FROM humedad";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['temperatura']."</td>
                    <td>".$result['humedad']."</td>
                    <td>".$result['fecha']."</td>
                    <td>".$result['hora']."</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>