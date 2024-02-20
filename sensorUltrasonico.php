<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sensor Ultrasonico</h1>

</div>
<div>
    <form id="frmServo" name="frmServo">

            <div class="form-group col-md-4">
                <label for="inputAddress">Distancia:</label>
                <input type="text" class="form-control" id="distancia" name="distancia">
            </div>

            <div class="form-group col-md-4">
                <label for="inputAddress">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>

            <div class="form-group col-md-4">
                <label for="inputAddress">Hora:</label>
                <input type="time" class="form-control" id="time" name="time">
            </div>

            <div class="form-group col-md-4">
                <label for="inputAddress">Estatus</label>
                <select class="form-control" id="status" name="status">
                <option value="0">0</option>
                <option value="1">1</option>
                </select>
            </div>

        </div>
        
        <input type="button" class="btn btn-primary" onclick=" registrarSensorU();" value="Registrar"></input>
    </form>
    <hr class="sidebar-divider my-4">
    <div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Distancia</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Estatus</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT id_sensor, distancia, fecha, hora,status FROM sensor_ultrasonico";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['distancia']."</td>
                    <td>".$result['fecha']."</td>
                    <td>".$result['hora']."</td>
                    <td>".$result['status']."</td>
                    <td><a href='#' onclick='(".$result['id_sensro'].");'>Editar</a></td>
                    <td><a href='#' onclick='(".$result['id_sensor'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>
</div>