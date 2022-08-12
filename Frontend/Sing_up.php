<?php
    /*require '../Backend/scripts/crrera_mst.php';
    $crrera_mst = new crrera_mst();

    $route = '../';*/
?>
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
    <link rel="stylesheet" href="css/index.css">
    <title>Registro</title>
</head>
<body>
    <?php 
        /*$result_crrera = $crrera_mst->get_crrera($route);*/
    ?>
    <div>
        <div>
            <div>
                <form method="POST" action="../Backend/usu_almn_insert.php">
                    <div>
                        <input type="text" id="name" name="name" placeholder="Nombre completo" minlength="8" required>
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Correo" required>
                    </div>
                    <div>
                        <input type="text" id="enrollment" name="enrollment" placeholder="Matricula" minlength="7" maxlength="7" required>
                    </div>
                    <div>
                        <select name="student_career" id="student_career" required>
                            <option value="" select hidden> Selecciona tu carrera</option>
                            <option value="1">Tecnologias de la información</option>
                            <option value="2">Gastronomia</option>
                            <option value="3">Mecatronica</option>
                            <?php
                               /* while($crrera = $result_crrera->fetch_assoc()){
                                    ?>
                                        <option value="<?php echo $crrera['crrera_id'];?>"><?php echo $crrera['crrera_dscrip'];?></option>
                                    <?php
                                }*/
                            ?>
                        </select>
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
