<?php
include 'conexion.php';
$query = "SELECT Id_cajon, numero, status FROM cajon ORDER BY numero";
$ejecutar = $conexion->query($query);
echo "<div class='row'>";
while ($result = $ejecutar->fetch_array()) {
    echo "<div class='col-sm-3'>
            <div class='card' style='width:18rem;'>
                <img src='imagenes/logo.jpeg' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>Cajon " . $result['numero'] . "</h5>";
    if ($result['status'] == 1) {
        $query2 = "SELECT * FROM registro INNER JOIN vehiculo ON vehiculo.id_vehiculo 
        = registro.id_vehiculo INNER JOIN cajon ON cajon.id_cajon = registro.id_cajon INNER JOIN tarifas
        ON tarifas.id_tarifa = registro.id_tarifa WHERE registro.id_cajon = 
        '" . $result['id_cajon'] . "'";
        $ejecutar2 = $conexion->query($query2);
        while ($result2 = $ejecutar2->fetch_array()) {
            // Aquí va el código para el bucle interno
            // Puedes acceder a los datos usando $result2['nombre_del_campo']
        }
    } else {
        echo "<p class='card-text'>No existe un vehiculo ocupando este cajón</p>";
        echo "<a href='#' class='btn btn-info' onclick='abrirModal(" . $result['Id_cajon'] . ")'>Ocupar</a>";
    }
    echo "
                </div>
            </div>
        </div>
    ";
}
?>
