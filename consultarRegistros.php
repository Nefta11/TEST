<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <th scope="col">Registro</th>
            <th scope="col">Vehiculo</th>
            <th scope="col">Cajon</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">Hora de ingreso</th>
            <th scope="col">Fecha de salida</th>
            <th scope="col">Hora de salida</th>
            <th scope="col">Empleado</th>
            <th scope="col">Tarifa</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';

            $query="SELECT * FROM registro";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>  
                <td>".$result['id_registro']."</td>
                <td>".$result['id_vehiculo']."</td>
                <td>".$result['id_cajon']."</td>
                <td>".$result['fechaingreso']."</td>
                <td>".$result['horaingreso']."</td>
                <td>".$result['fechasalida']."</td>
                <td>".$result['horasalida']."</td>
                <td>".$result['id_empleado']."</td>
                <td>".$result['id_tarifa']."</td>
                <td><a href='#' onclick='actualizarRegistro(".$result['id_registro'].")'>Actualizar</a></td>
                <td><a href='#' onclick='eliminarRegistro(".$result['id_registro'].")'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
