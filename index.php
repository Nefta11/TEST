<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al sistema de estacionamiento</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color:#eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="imagenes/logo.jpg" alt="logo" style="width: 186px;">
                                        <h4 class="mt-3 mb-5 pb-1">Bienvenido al sistema</h4>
                                    </div>
                                    <form action="login.php" method="post">
                                        <p>Ingresa los datos de tu cuenta</p>
                                        <div class="form-outline mb-4">
                                            <label for="usuario" class="form-label">Usuario</label>
                                            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario o Correo">
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="contrasena" class="form-label">Contraseña</label>
                                            <input type="password" id="contraseña" name="contrasena" class="form-control">
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar</button>
                                            <a href="menu.php" class="text-muted">Recordar Contraseña</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center ph-4">
                                            <p class="mb-0 me-2">No Tienes Cuenta?</p>
                                            <button type="button" class="btn btn-outline-danger">Crear Cuenta</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Bienvenidos al sistema de control de estacionamiento</h4>
                                    <p class="small mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt iure aliquam voluptate id officia, autem, in eligendi earum, dignissimos deleniti reiciendis. Sit nobis porro fuga labore dolor id nulla quos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="scripts/js/bootstrap.bundle.min.js"></script>
</body>
</html>
