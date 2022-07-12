<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <main>
                    <div class="row">
                        <div class="col">
                        <span class="float-center"><h1>Pantallas de usuario</h1></span>
                        </div>
                        <div class="col">
                        <span class="float-right"><button type="button" class="btn btn-danger" style="float-right"> < Regresar</button></span>
                        </div>
                    </div>
                </main>

            <div class="formulario_content">
                <div class="formulario">
                    <form action="" action="">
                        <div>
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="Frontend\img\2.png" class="d-block w-100" alt="..." height="400px">
                                </div>
                                <div class="carousel-item">
                                <img src="Frontend\img\2.png" class="d-block w-100" alt="..." height="400px">
                                </div>
                                <div class="carousel-item">
                                <img src="Frontend\img\descarga.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                            </div>
                            <button class="btn btn-primary"><a href="Frontend/Sing_in_almn.php">Alumnos</a></button>
                            <button class="btn btn-success"><a href="Frontend/Sing_in_prfsr.php">Docentes</a></button><br>
                            <p>¿No tienes cuenta? <a href="Frontend/Sing_Up.php">Registrate aqui</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>