
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