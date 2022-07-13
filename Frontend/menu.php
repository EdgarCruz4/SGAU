<?php
    session_start();
    $user_name = $_SESSION['user_name'];
    if(!isset($user_name)){
        header("location: ../index.php");
    }
?>
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
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!--Css personalizado-->
    <link rel="stylesheet" href="css/menu.css">
    <title>Estudiantes</title>
</head>
<body id="body">

    <!--Start side menu-->
    <div class="menu-content">
        <header>
            <div class="icon__menu">
                <i class="fas fa-bars" id="btn_open"></i>
            </div>
        </header>

        <div class="menu__side" id="menu_side">

            <div class="name__page">
                <i class="fa-solid fa-school"></i>
                <h5>UTVM</h5>
            </div>

            <div class="options__menu">	

                <a href="act_mst_calendar.php" class="selected">
                    <div class="option">
                        <i class="fa-solid fa-calendar"></i>
                        <h7>Calendario Escolar</h7>
                    </div>
                </a>

                <a href="act_mst.php" class="selected">
                    <div class="option">
                        <i class="fa-solid fa-calendar-check"></i>
                        <h7>Eventos Universitarios</h7>
                    </div>
                </a>
                <a href="../Backend/scripts/exit.php" class="selected">
                    <div class="option">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <h7>Exit</h7>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--End of side menu-->

</body>
    <script src="../Backend/js/menu.js"></script>
</html>