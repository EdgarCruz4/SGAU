<?php
    require '../Backend/scripts/crrera_mst.php';
    $act_mst = new crrera_mst();

    $route = '../';
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
            include_once 'menu.php';
            $user_name = $_SESSION['user_name'];
            $crrera_id = $_SESSION['user_crrera'];
        ?>
    </nav>
    <!--End of side menu-->
    <!--Start of contento-->
    <main>

    <main>
        <div class="row">
            <div class="col">
                <span align="center">
                    <h2 class="font-weight-bold">Eventos Culturales, Deportivos y Universitarios</h2>
                </span>
            </div>
        </div>
    </main> 


    <div class="container-xl">
        <div class="row align-items-center">
        <?php
            $result_act = $act_mst->get_crrera_std($route, $crrera_id);
            while($act = $result_act->fetch_assoc()){
                $finicio = date_create($act['act_finicio']);
                $ffin = date_create($act['act_ffin']);
                $act_id = $act['act_id'];
        ?>
            <div class="col-xs mt-3">
                <div class="col-2">
                    <div class="card shadow" style="width: 18rem; height: 616px;" >
                        <img class="rounded" src="multimedia/<?php echo $act['act_img'];?>" style="height: 190.58px">
                        <div class="card-body" style="height:148px;">
                            <h5 class="card-title"><b><?php echo $act['act_titulo'];?></b></h5>
                            <p class="card-text"><?php echo $act['act_dscrp_breve'];?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Fecha de inicio:</b> <br/> <?php echo date_format($finicio, "Y/m/d g:i A");?></li>
                            <li class="list-group-item"><b>Fecha de finlización:</b> <br/> <?php echo date_format($ffin, "Y/m/d g:i A");?></li>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreInformation" onclick="buttonModal('<?php echo $act_id;?>')"><i class="fa-solid fa-eye" aria-hidden="true"></i> Ver</button>
                            <!-- Modal -->
                            <div id="modal">
                            <div class="modal fade" id="moreInformation" tabindex="-1" role="dialog" aria-labelledby="moreInformation" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" id="modalContent">
                                    
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </div>
    <!--End of contento-->
</body>
    <script src="../Backend/js/modalCard.js"></script>
</html>