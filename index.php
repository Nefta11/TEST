<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al sistema de estacionamiento</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
    
<section class="h-100 gradient-form" style="background-color:#eee;">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center" >
                                <img src="imagenes/logo.jpg" style="width: 185px;" alt="logo">
                                <h4 class="mt-1 mb-5 pg-1">Bienvenido al sistema</h4>
                            </div>
                            <form action="login.php" method="POST">
                                <p>Ingresa los datos de tu cuenta</p>
                                <div class="form-outline mb-5">
                                    <label for="" class="form-label">Usuario</label>
                                    <input type="text" id="usuario" class="form-control" placeholder="Usuario o correo"/>
                                </div>
                                <div class="form-outline mb-5">
                                <label for="" class="form-label">Contraseña</label>
                                    <input type="password" id="contrasena" class="form-control" placeholder="Digite su contraseña"/>
                                </div> 
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="Ingresar">
                                    <a href="#" class="text-muted">Recordar Contraseña?</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center ph-4">
                                    <p class="mb-0 me-2">No tienes Cuenta?</p>
                                    <button type="Button" class="btn btn-outline-danger">Crear Cuenta</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                            <h4 class="mb-4">Bienvenido al sistema de control de estacionamiento</h4>
                            <p class="small mb-0">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam delectus sunt atque incidunt quas cumque quis dolores, tempore officia, pariatur nobis minus illum accusamus consectetur ex voluptates dolorum nam! Odit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

    <script src="scripts/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>