<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Status</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT id_ftp,status, fecha, hora FROM fotoresistencia";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['status']."</td>
                    <td>".$result['fecha']."</td>
                    <td>".$result['hora']."</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>