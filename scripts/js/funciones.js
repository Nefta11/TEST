
function closeSession(){
    Swal.fire({
        title: "Quieres salir del sistema",
        text: "Seleccciona si para salir",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Salir",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if(result.isConfirmed){
            window.location = "logout.php"
        }
    })
}

function msjGuardar(){
    alert("Datos guardados");
}
function cargarDiv(div,url){
    $(div).load(url);
}

function registrarCliente(){
    var nombre=$("#nombre").val();
    var correo=$("#correo").val();
    var numero=$("#numero").val();
    var direccion=$("#direccion").val();
    $.post("registrarCliente.php",{"nombre":nombre,"direccion":direccion,"numero":numero,"correo":correo}, function(respuesta){
        alert(respuesta);
        $("#nombre").val("");
        $("#direccion").val("");
        $("#numero").val("");
        $("#correo").val("");
    });

}

function registrarVehiculo(){
    var matricula=$("#matricula").val();
    var modelo=$("#modelo").val();
    var color=$("#color").val();
    var puertas=$("#puertas").val();
    var tipo=$("#tipo").val();
    var id_cliente=$("#id_cliente").val();

    $.post("registrarVehiculo.php",{"matricula":matricula,"modelo":modelo,"color":color,"puertas":puertas,"tipo":tipo,"id_cliente":id_cliente}, function(respuesta){
        alert(respuesta);
        $("#matricula").val("");
        $("#modelo").val("");
        $("#color").val("");
        $("#puertas").val("");
        $("#tipo").val("");
        $("#id_cliente").val("");
        
    });

}

function registrarEmpleado(){
    var nombre=$("#nombre").val();
    var correo=$("#correo").val();
    var numero=$("#numero").val();
    var direccion=$("#direccion").val();
    var usuario=$("#usuario").val();
    var contrasena=$("#contrasena").val();
    $.post("registrarEmpleado.php",{"nombre":nombre,"direccion":direccion,"numero":numero,"correo":correo,"usuario":usuario,"contrasena":contrasena}, function(respuesta){
        alert(respuesta);
        $("#nombre").val("");
        $("#direccion").val("");
        $("#numero").val("");
        $("#correo").val("");
        $("#usuario").val("");
        $("#contrasena").val("");
    });

}
function registrarCajon(){
    var numero=$("#numero").val();
    var estatus=$("#estatus").val();
   
    $.post("registrarCajon.php",{"numero":numero,"estatus":estatus}, function(respuesta){
        alert(respuesta);
        $("#numero").val("");
        $("#estatus").val("");
        
    });

}

function registrarTarifa(){
    var tarifa=$("#tarifa").val();
    var monto=$("#monto").val();
   
    $.post("registrarTarifa.php",{"tarifa":tarifa,"monto":monto}, function(respuesta){
        alert(respuesta);
        $("#tarifa").val("");
        $("#monto").val("");
        
    });

}

function eliminarCajon(idcajon){
    $.post("eliminarCajon.php",{
        "id_cajon":idcajon
    },
        function(result){
            alert(result);
        }
    );
}

function eliminarCliente(idcliente){
    $.post("eliminarCliente.php",{
        "id_cliente":idcliente
    },
        function(result){
            alert(result);
        }
    );
}

function eliminarVehiculo(idvehiculo){
    $.post("eliminarVehiculo.php",{
        "id_vehiculo":idvehiculo
    },
        function(result){
            alert(result);
        }
    );
}

function eliminarEmpleado(idempleado){
    $.post("eliminarEmpleado.php",{
        "id_empleado":idempleado
    },
        function(result){
            alert(result);
        }
    );
}
function eliminarTarifa(idtarifa){
    $.post("eliminarTarifa.php",{
        "id_tarifa":idtarifa
    },
        function(result){
            alert(result);
        }
    );
}


function cancelar(){
    cargarDiv($("#contenido"),'inicio.php');
}


function editarCliente(idcliente){
    $.post("actualizarcliente.php",{
        "id_cliente":idcliente
    }, function(respuesta){
        contenido.innerHTML=respuesta;
    });
}

function actualizarcliente(idcliente) {
    var nombre = $("#nombre").val();
    var correo = $("#correo").val();
    var numero = $("#numero").val();  // Correcto si el campo en la base de datos es 'telefono'
    var direccion = $("#direccion").val();

    $.post("updatecliente.php", {
        "id_cliente": idcliente,
        "nombre": nombre,
        "direccion": direccion,
        "numero": numero,
        "correo": correo
    }, function (result) {
        alert(result);
        cargarDiv($("#contenido"), 'inicio.php');
    });
}



function editarVehiculo(idVehiculo) {
    $.post("actualizarvehiculo.php", {
        "id_vehiculo": idVehiculo
    }, function (respuesta) {
        contenido.innerHTML = respuesta;
    });
}

function actualizarVehiculo(idVehiculo) {
    var matricula = $("#matricula").val();
    var modelo = $("#modelo").val();
    var color = $("#color").val();
    var puertas = $("#puertas").val();
    var tipo = $("#tipo").val();
    var idCliente = $("#id_cliente").val();

    $.post("updatevehiculo.php", {
        "id_vehiculo": idVehiculo,
        "matricula": matricula,
        "modelo": modelo,
        "color": color,
        "puertas": puertas,
        "tipo": tipo,
        "id_cliente": idCliente
    }, function (result) {
        alert(result);
        cargarDiv($("#contenido"), 'inicio.php');
    });
}



function editarTarifa(idTarifa) {
    $.post("actualizartarifa.php", {
        "id_tarifa": idTarifa
    }, function (respuesta) {
        contenido.innerHTML = respuesta;
    });
}

function actualizarTarifa(idTarifa) {
    var tarifa = $("#tarifa").val();
    var monto = $("#monto").val();

    $.post("updatetarifa.php", {
        "id_tarifa": idTarifa,
        "tarifa": tarifa,
        "monto": monto
    }, function (result) {
        alert(result);
        cargarDiv($("#contenido"), 'inicio.php');
    });
} 

// En tu archivo JavaScript

function editarEmpleado(idEmpleado) {
    $.post("actualizarempleado.php", {
        "id_empleado": idEmpleado
    }, function (respuesta) {
        contenido.innerHTML = respuesta;
    });
}

function actualizarEmpleado(idEmpleado) {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#numero").val();
    var correo = $("#correo").val();
    var usuario = $("#usuario").val();
    var contrasena = $("#contrasena").val();

    $.post("updateempleado.php", {
        "id_empleado": idEmpleado,
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo,
        "usuario": usuario,
        "contrasena": contrasena
    }, function (result) {
        alert(result);
        cargarDiv($("#contenido"), 'inicio.php');
    });
}



