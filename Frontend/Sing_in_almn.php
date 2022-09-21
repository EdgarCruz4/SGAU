<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="css/bootstrap4/css/bootstrap.min.css">
    <script src="css/bootstrap4/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    
    <!--Css personalizado-->
    <link rel="stylesheet" href="css/alumno.css">

    <title>Inicio de sesión</title>
</head>
<body class="align">
  <div class="login">

    <header class="login__header">
      <h2><svg class="icon">
          <use xlink:href="#icon-lock" />
        </svg>Inicio de sesión</h2>
    </header>

    <form action="../Backend/usu_vrf_std.php" class="login__form" method="POST">

      <div>
        <label for="text">Matrícula</label>
        <input type="text" id="matricula" name="enrollment" placeholder="Matrícula" minlength="7" maxlength="7" required>
      </div>

      <div>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Contraseña">
      </div>

      <div>
        <input class="button" type="submit" value="Ingresar">
      </div>
      <div>
        <a class="return" href="../index.php">Regresar a la pantalla de inicio</a>
      </div>
      <div>
        No tienes cuenta? <a class="return" href="Sing_Up.php" >Registrate aqui</a>
      </div>
    </form>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons">

    <symbol id="icon-lock" viewBox="0 0 448 512">
      <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z" />
    </symbol>

  </svg>
</body>
</html>
