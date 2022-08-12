<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!--Css personalizado-->
    <link rel="stylesheet" href="Frontend/css/index.css">

    <title>Inicio de sesión</title>
</head>
<body>
    <div>
        <div>
            <div class="formulario_content">
                <div class="formulario">
                    <main>
                        <div class="login__header">
                            <div>
                                <h2>Pantallas de usuarios</h2>
                            </div>
                        </div>
                    </main><br>
                    <form action="" action="">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="Frontend\multimedia\carousel\2.jpg" alt="Second slide" height="450px">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="Frontend\multimedia\carousel\Cultura.webp" alt="Second slide" height="450px">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="Frontend\multimedia\carousel\escuela.jpg" alt="First slide" height="450px">
                        </div>
                    </div>
                    </div>
                    <div class="text">
                        <p>Bienvenido al sistema Gestor de Actividades Universitaraias, para poder comenzar selecciona el tipo de usuario </p><br>
                    </div>
                    <div class="buttons">
                        <a class="btn btn-success" style="margin-left: 12.5%; width:25% " href="Frontend/Sing_in_almn.php">Alumnos</a>
                        <a class="btn btn-primary" style="margin-left: 22.5%; width:25% " href="Frontend/Sing_in_dcnt.php">Docentes</a><br><br>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>