<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website with a contact Form 01</title>
    
    <link rel="stylesheet" href="css/estilo.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body class="body_todo">
    
    <div class="content">

        <h1 class="logo">Encargado</h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Encargado</h3>
                <form action="">
                    <p class="block">
                        <label>Nombre</label>
                        <input type="text" name="fullname">
                    </p>
                    <p class="block">
                       <label>Direccion</label> 
                        <textarea name="message" rows="2"></textarea>
                    </p>
                    <p>
                        <label>Telefono</label>
                        <input type="tel" name="phone">
                    </p>
                    <p>
                        <label>Email</label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label>Usuario</label>
                        <input type="text">
                    </p>
                    <p>
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" autocomplete="new-password" required>
                    </p>
                    
                    <p class="block">
                        <button>
                            Guardar
                        </button>
                    </p>
                </form>
            </div>
            
        </div>

    </div>

</body>
</html>