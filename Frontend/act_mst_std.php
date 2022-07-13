<?php
    require '../Backend/scripts/act_mst.php';
    $act_mst = new act_mst();

    $route = '../';
    $i=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Universitarias</title>
</head>
<body>
    <!--Start side menu-->
    <nav id="sidebar">
        <?php 
            include 'menu.php';
            $user_name = $_SESSION['user_name'];
        ?>
    </nav>
    <!--End of side menu-->
    <!--Start of contento-->
    <main>

    <main>
        <div class="row">
            <div class="col">
                <span align="center">
                    <h2 class="font-weight-bold">Eventos Culturales y Universitarias</h2>
                </span>
            </div>
        </div>
    </main> 


    <div class="container-xl">
        <div class="row align-items-center">
        <?php
            $result_act = $act_mst->get_act($route);
            while($act = $result_act->fetch_assoc()){
        ?>
            <div class="col-xs">
                <div class="col-2">
                    <div class="card" style="width: 18rem; height: 544px;" >
                        <img class="rounded" src="multimedia/<?php echo $act['act_img'];?>" style="height: 190.58px">
                        <div class="card-body">
                            <h5 class="card-title"><b><?php echo $act['act_titulo'];?></b></h5>
                            <p class="card-text"><?php echo $act['act_dscrp'];?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Fecha de inicio: <?php echo $act['act_finicio'];?></li>
                            <li class="list-group-item">Fecha de finlización: <?php echo $act['act_ffin'];?></li>
                            <?php 
                                if($act['act_url'] != null){
                            ?>
                            <li class="list-group-item"><a href="<?php echo $act['act_url'];?>">Link de acceso</a></li>
                            <?php 
                                }
                                else{
                                    ?>
                                        <li class="list-group-item">No hay link de acceso</li>
                                    <?php
                                }
                            ?>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i> Ver</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                $i++;
                if($i == 5){
                    echo '<br>';
                    $i=1;
                }
            }
        ?>
        </div>
    </div>
    <!--End of contento-->
</body>
</html>