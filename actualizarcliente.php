<br>
<h2>Actualizar Cliente</h2>
<hr>
<?php
include 'conexion.php';
$idcliente=$_POST['id_cliente'];
$query="SELECT * FROM cliente WHERE id_cliente='" .
$idcliente. "'";
$ejecutar= $conexion->query($query);
while ($result = $ejecutar->fetch_array()){
    ?>
        <form id="frmClientes" name="frmClientes">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                value="<?php echo $result ['nombre']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo"
                value="<?php echo $result ['correo']; ?>">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-7">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" name="direccion" id="direccion"
                value="<?php echo $result ['direccion']; ?>">
            </div>
            <div class="form-group col-md-5">
                <label for="numero">Numero</label>
                <input type="text" class="form-control" name="numero" id="numero"
                value="<?php echo isset($result['telefono']) ? $result['telefono'] : ''; ?>">
            </div>
        </div>
        
        <div class="text-center pt-1 mb-5 pb-1">
        <input type="button" onclick="cancelar();" class="btn btn-danger btn-block" value="Cancelar"></input>
        <input type="button" onclick="actualizarcliente(<?php echo $idcliente; ?>);" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
    <?php
}
?>