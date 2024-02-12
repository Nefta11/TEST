<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Registro</h1>

</div>
<div>
    <form>
        <div class="form-row">
        <div class="form-group col-md-3">
                <label for="id_vehiculo">ID Vehiculo</label>
                <select class="form-control" id="id_vehiculo" name="id_vehiculo">
                    <option>Seleccione una opcion</option>
                    <?php 
                    include 'conexion.php';
                    $query="SELECT id_vehiculo, matricula FROM vehiculo";
                    $ejecutar=$conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo"<option value='".$result['id_vehiculo']."'>".$result['matricula']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
            <label for="id_cajon">ID Cajon</label>
                <select class="form-control" id="id_cajon" name="id_cajon">
                    <option>Seleccione una opcion</option>
                    <?php 
                    include 'conexion.php';
                    $query="SELECT id_cajon, numero FROM cajon";
                    $ejecutar=$conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo"<option value='".$result['id_cajon']."'>".$result['numero']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
            <label for="id_cajon">ID Empleado</label>
            <select class="form-control" id="id_empleado" name="id_empleado">
                    <option>Seleccione una opcion</option>
                    <?php 
                    include 'conexion.php';
                    $query="SELECT id_empleado, nombre FROM empleados";
                    $ejecutar=$conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo"<option value='".$result['id_empleado']."'>".$result['nombre']."</option>";
                    }
                    ?>
                </select>
            </div>*/
            <div class="form-group col-md-3">
            <label for="id_cajon">ID Tarifa</label>
                <select class="form-control" id="id_tarifa" name="id_tarifa">
                    <option>Seleccione una opcion</option>
                    <?php 
                    include 'conexion.php';
                    $query="SELECT id_tarifa, monto FROM tarifa";
                    $ejecutar=$conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo"<option value='".$result['id_tarifa']."'>".$result['monto']."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        
        <input type="button" class="btn btn-primary" onclick="registrarRegistro()" value="Registrar"></input>
    </form>

    <hr class="sidebar-divider my-4">
<div class="table-responsive">
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID Vehículo</th>
            <th scope="col">ID Cajón</th>
            <th scope="col">ID Empleado</th>
            <th scope="col">ID Tarifa</th>
            <th scope="col">Fecha Ingreso</th>
            <th scope="col">Hora Ingreso</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'conexion.php';
        $query = "SELECT id_registro, id_vehiculo, id_cajon, id_empleado, id_tarifa, fechaingreso, horaingreso FROM registro";
        $ejecutar = $conexion->query($query);

        while($result = $ejecutar->fetch_array()) {
            // Consulta para obtener información asociada al ID Vehículo
            $query_vehiculo = "SELECT matricula FROM vehiculo WHERE id_vehiculo = " . $result['id_vehiculo'];
            $result_vehiculo = $conexion->query($query_vehiculo)->fetch_assoc();

            // Consulta para obtener información asociada al ID Cajón
            $query_cajon = "SELECT numero FROM cajon WHERE id_cajon = " . $result['id_cajon'];
            $result_cajon = $conexion->query($query_cajon)->fetch_assoc();

            // Consulta para obtener información asociada al ID Empleado
            $query_empleado = "SELECT nombre FROM empleados WHERE id_empleado = " . $result['id_empleado'];
            $result_empleado = $conexion->query($query_empleado)->fetch_assoc();

            // Consulta para obtener información asociada al ID Tarifa
            $query_tarifa = "SELECT monto FROM tarifa WHERE id_tarifa = " . $result['id_tarifa'];
            $result_tarifa = $conexion->query($query_tarifa)->fetch_assoc();

            echo "<tr>
                <td>".$result_vehiculo['matricula']."</td>
                <td>".$result_cajon['numero']."</td>
                <td>".$result_empleado['nombre']."</td>
                <td>".$result_tarifa['monto']."</td>
                <td>".$result['fechaingreso']."</td>
                <td>".$result['horaingreso']."</td>
                <td><a href='#' onclick='actualizarRegistro(".$result['id_registro'].");'>Editar</a></td>
                <td><a href='#' onclick='eliminarRegistro(".$result['id_registro'].");'>Eliminar</a></td>
            </tr>";
        }
        ?>
    </tbody>
</table>

</div>

</div>