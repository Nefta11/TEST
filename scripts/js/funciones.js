function msjerroruser(){
    alert("Error de usuario");
}

function msjerrorpass(){
    alert("Error de password");
}

function msjguardar(){
    alert("Datos guardados");
}

function cargarDiv(div,url){
    $(div).load(url);

}


function salir(){
    Swal.fire({
        title:"Quieres salir del sistema",
        text:"Selecciona si para salir",
        icon:"warning",
        showCancelButton: true,
        confirmButtonColor:"#3085d6",
        cancelButtonColor:"#d33",
        confirmButtonText:"Cancelar"
    }).then((result)=>{
        if(result.isConfirmed){
            window.location = "logout.php";
        }
    });
}

function registrarCliente() {
    // Obtener los valores del formulario
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();

    // Validar que los campos no estén vacíos
    if (nombre === '' || direccion === '' || telefono === '' || correo === '') {
        alert("Por favor, completa todos los campos.");
        return;
    }

    // Enviar los datos al archivo PHP usando una petición POST
    $.post("registrarcliente.php", {
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    }, function (respuesta) {
        // Mostrar la respuesta del servidor
        alert(respuesta);

        // Limpiar los campos del formulario después de enviar los datos
        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
    }).fail(function () {
        alert("Error al enviar los datos al servidor.");
    });
}


