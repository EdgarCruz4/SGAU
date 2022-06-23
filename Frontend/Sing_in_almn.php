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
    <link rel="stylesheet" href="css/start_window.css">

    <title>Registrarse</title>
</head>
<body>
    <div>
        <div>
            <div>
                <form method="POST" action="../Backend/usu_vrf_std.php">
                    <div>
                        <input type="text" placeholder="Matricula" name="enrollment">
                    </div>
                    <div>
                        <input type="text" placeholder="Contraseña" name="password">
                    </div>
                    <div>
                        <button class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
                    </div>
                    <div>
                        <a href="../index.php">Regresar a la pantalla de inicio</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>