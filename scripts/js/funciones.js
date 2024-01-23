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

function registrarCliente(){
    var nombre=$("#nombre").val();
    var direccion=$("#direccion").val();
    var telefono=$("#telefono").val();
    var correo=$("#correo").val();

    alert(nombre+direccion+telefono+correo);

    $.post("registrarcliente.php",{
        "nombre":nombre,
        "direccion":direccion,
        "telefono":telefono,
        "correo":correo},
        
        function(respuesta){
        alert(respuesta);
        $("#nombre").val("");
        $("#direccion").val("");
        $("#telefono").val("");
        $("#correo").val("");
    });
}



function registrarVehiculo(){
    var matricula=$("#matricula").val();
    var modelo=$("#modelo").val();
    var color=$("#color").val();
    var puertas=$("#puertas").val();
    var tipo=$("#tipo").val();
    var tipo=$("#Id_cliente").val();

    alert(matricula+modelo+color+puertas+tipo);

    $.post("registrarvehiculo.php",{
        "matricula":matricula,
        "modelo":modelo,
        "color":color,
        "puertas":puertas,
        "tipo":tipo,
        "Id_cliente":"Id_cliente"
    },
        
        function(respuesta){
        alert(respuesta);
        $("#matricula").val("");
        $("#modelo").val("");
        $("#color").val("");
        $("#puertas").val("");
        $("#tipo").val("");
        $("#Id_cliente").val("");
    });
}