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
            </div>
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
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Fecha de Ingreso</label>
                <input type="date" class="form-control" id="fechaIngreso">
            </div>

            <div class="form-group col-md-6">
                <label for="inputAddress">Hora de Ingreso</label>
                <input type="time" class="form-control" id="fechaIngreso">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Fecha de Salida</label>
                <input type="date" class="form-control" id="fechaIngreso">
            </div>

            <div class="form-group col-md-6">
                <label for="inputAddress">Hora de Salida</label>
                <input type="time" class="form-control" id="fechaIngreso">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>