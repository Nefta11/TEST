<h1>Dashboard</h1>

<?php
include 'conexion.php';
$query = "SELECT id_cajon, numero, status FROM cajon ORDER BY numero";
$ejecutar =  $conexion->query($query);

if (!$ejecutar) {
    die("Error en la consulta de cajones: " . mysqli_error($conexion));
}

echo "<div class='row'>";
while($result = $ejecutar->fetch_array()){
    echo "<div class='col-sm-3'>
    <div class='card' style='width:18rem;'>
        <img src='imagenes/logo.jpeg' class='card-img-top' alt'imagen'>
            <div class='card-body'>
                <h5 class='card-title'> Cajon ".$result['numero']."</h5>";
    
    if($result['status'] == 1){
        $query2 = "SELECT * FROM registro INNER JOIN vehiculo ON 
        vehiculo.id_vehiculo = registro.id_vehiculo INNER JOIN cajon ON 
        cajon.id_cajon = registro.id_cajon INNER JOIN tarifa ON 
        tarifa.id_tarifa = registro.id_tarifa INNER JOIN empleados ON
        empleados.id_empleado = registro.id_empleado WHERE registro.id_cajon = ".$result['id_cajon']."";
        $ejecutar2 = $conexion->query($query2);

        if (!$ejecutar2) {
            die("Error en la consulta de registro: " . mysqli_error($conexion));
        }

        while($result2 = $ejecutar2->fetch_array()){
            echo "<h4>Matricula:".$result2['matricula']."</h4>";
            echo "<p>".$result2['fechaingreso']." ".$result2['horaingreso']."</p>";
            echo "<p>".$result2['tarifa']."</p>";
            echo "<p>".$result2['nombre']."</p>";
            echo "<a href='#' class='btn btn-warning' onclick='abrirModal(".$result['id_cajon'].")' >Salir</a>";
        }
    }
    else{
        echo "<p class='card-text'>No existe un vehiculo ocupando este cajon</p>";
        echo "<a href='#' class='btn btn-info' onclick='abrirModal(".$result['id_cajon'].")' >Ocupar</a>";
    }
    echo "</div></div></div>" ;
}

?>


<div class="modal" id="modalPromociones">
    <div class="modal-dialog">
        <div class="modal-content">
    <!-- Modal header -->
        <div class=""modal-header>
            <h4 class="modal-title">Registrar uso de estacionamiento</h4>
            <button type="button" class="close" data-dismiss="modal" 
            onclick="cerrarModal();">x</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
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
            <div class="form-group col-md-4">
            <label class="form-label" for="cajon">ID Cajon</label>
            <input type="text" name="id_cajon" id="id_cajon" value="" class="form-control" readonly="readonly">
            </div>

            <div class="form-group col-md-4">
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
        
        <input type="button" class="btn btn-primary" onclick="guardarRegistro()" value="Registrar"></input>
    </form>
        </div>

        </div>

    </div>

</div>
