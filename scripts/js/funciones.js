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