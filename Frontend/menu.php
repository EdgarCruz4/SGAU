<?php
    require '../Backend/scripts/user_mst.php';
    $user_mst = new user_mst();
    
    $n_str = $user_mst->session_star_menu();
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
                <span>UTVM</span>
            </div>

            <div class="options__menu">	

                <!--<div class="user">
                    <div class="option">
                        <i class="fa-solid fa-user"></i>
                        <?php //echo $_SESSION['user_name'];?>
                    </div>
                </div>-->

                <?php
                    if($n_str == 7){
                        ?>
                        <a href="act_mst_calendar_std.php" class="selected">
                            <div class="option">
                                <i class="fa-solid fa-calendar"></i>
                                <span>Calendario Escolar</span>
                            </div>
                        </a>
                        <?php        
                    }
                ?>

                <?php
                    if($n_str == 13){
                        ?>
                        <a href="#" class="selected">
                            <div class="option">
                                <i class="fa-solid fa-calendar"></i>
                                <span>Editar Calendario Escolar</span>
                            </div>
                        </a>
                        <?php        
                    }
                ?>

                <?php
                    if($n_str == 7){
                        ?>
                        <a href="act_mst_std.php" class="selected">
                            <div class="option">
                                <i class="fa-solid fa-calendar-check"></i>
                                <span>Eventos Universitarios</span>
                            </div>
                        </a>
                        <?php        
                    }
                ?>

                <?php
                    if($n_str == 13){
                        ?>
                        <a href="act_mst.php" class="selected">
                            <div class="option">
                                <i class="fa-solid fa-calendar-check"></i>
                                <span>Editar Eventos Universitarios</span>
                            </div>
                        </a>
                        <?php        
                    }
                ?>
            </div>
            
            <div class="exit">
                <a href="../Backend/scripts/exit.php" class="selected">
                    <div class="select__exit">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Exit</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--End of side menu-->

</body>
    <script src="../Backend/js/menu.js"></script>
</html>