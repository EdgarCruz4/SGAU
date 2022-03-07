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
    <link rel="stylesheet" href="css/start_window.css">
    <title>Inscribirse</title>
</head>
<body>
    <div>
        <div>
            <div>
                <form method="POST" action="../Backend/Usu_insert.php">
                    <div>
                        <input type="text" id="name" name="name" placeholder="Nombre" minlength="5" required>
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Correo" required>
                    </div>
                    <div>
                        <input type="text" id="enrollment" name="enrollment" placeholder="Matricula" minlength="7" required>
                    </div>
                    <div>
                        <input type="password" id="password1" name="password1" placeholder="Contraseña" minlength="6" required>
                    </div>
                    <div>
                        <input type="password" id="password2" name="password2" placeholder="Ingresa nuevamente la contraseña" minlength="6" required>
                    </div>
                    <div>
                        <button id="send" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Registrarme </button>
                    </div>
                    <div>   
                        <a href="../index.php">Regresar a la pantalla de inicio</a></p>
                    </div>
                </form>
                <div id="warning">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    /*$('#send').click(function{
        var name=$('#name').val();
        var email=$('#email').val();
        var enrollment=$('#enrollment').val();
        var password=$('#password').val();
        $.ajax({
            type: "POST",
            url: "../Backend/ajax/Usu_insert.php",
            data: "name="+name+"&email="+email+"&enrollment="+enrollment+"&password="+password,
            success:function(r){
                $('#warning').html(r);
            }
        });
    });*/
</script>
