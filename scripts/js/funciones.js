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

function registrarServo(){
    var descripcion=$("#descripcion").val();
    var grados=$("#grados").val();
    var status=$("#status").val();
    
    $.post("registrarServoM.php",{"descripcion":descripcion,"grados":grados,"status":status}, function(respuesta){
        alert(respuesta);
        $("#descripcion").val("");
        $("#grados").val("");
        $("#status").val("");
    });  
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
function actualizarRegistro(id_registro) {
    $.post('actualizarRegistro.php', {
        "id_registro": id_registro
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function modificarRegistro(id_registro) {

    var id_vehiculo = $("#id_vehiculo").val();
    var id_cajon = $("#id_cajon").val();
    var id_tarifa = $("#id_tarifa").val();


    $.post("modificarRegistro.php", {
        "id_registro": id_registro,
        "id_vehiculo": id_vehiculo,
        "id_cajon": id_cajon,
        "id_tarifa": id_tarifa,

    }, function (result) {
        if (result.trim() === "success") {
            alert('Actualizado correctamente');
        }
        else {
            alert("Error al editar");
        }
        loadDiv($("#contenido"), 'registros.php')
    });
}


function registrarRegistro() {

    var id_vehiculo = $("#id_vehiculo").val();
    var id_cajon = $("#id_cajon").val();
    var id_tarifa = $("#id_tarifa").val();


    $.post("registrarRegistro.php", {

        "id_vehiculo": id_vehiculo,
        "id_cajon": id_cajon,
        "id_tarifa": id_tarifa,

    }, function (respuesta) {
        // Display an alert message based on the response from the server
        if (respuesta.trim() === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            alert("Error al registrar");
        }


        $("#id_vehiculo").val("");
        $("#id_cajon").val("");
        $("#id_tarifa").val("");
        loadDiv($("#result"), 'registro.php')
    });
}

function eliminarServo(idservo){
    $.post("eliminarServo.php",{
        "id_servo":idservo
    },
        function(result){
            alert(result);
        }
    );
}

function eliminarRegistro(idregistro){
    $.post("eliminarRegistro.php",{
        "id_registro":idregistro
    },
        function(result){
            alert(result);
        }
    );
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

function editarServo(idservo) {
    $.post("actualizarservo.php", {
        "id_servo": idservo
    }, function (respuesta) {
        contenido.innerHTML = respuesta;
    });
}

function actualizarServo(id_servo){
    var descripcion = $("#descripcion").val();
    var grados = $("#grados").val();
    var status = $("#status").val();

    $.post("updateServo.php", {
        "id_servo": id_servo,
        "descripcion": descripcion,
        "grados": grados,
        "status": status
    }, function (result) {
        alert(result);
        cargarDiv($("#contenido"), 'inicio.php');
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


function abrirModal(id_cajon) {
    $("#modalPromociones").modal("show");
    $("#id_cajon").val(id_cajon);
}

function cerrarModal() {
    $("#modalPromociones").modal("hide");
}

