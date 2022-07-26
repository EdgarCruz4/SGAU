<?php
    require '../Backend/scripts/act_mst.php';
    $act_mst = new act_mst();

    $route = '../';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Calendario Escolar</title>
</head>
<body>
    <!--Start side menu-->
    <nav id="sidebar">
        <?php 
            include_once 'menu.php';
            $result_img = $act_mst->get_img($route);
        ?>
    </nav>
    <!--End of side menu-->

    <main>
        <div class="row">
            <div class="col">
                <span align="center">
                    <h2 class="font-weight-bold">Calendario Escolar</h2>
                </span>
                <span class="float-right">
                    <!-- Button to Open the Modal -->
                </span>
            </div>
        </div>
    </main>

    <!--Conteiner-->
    <div class="container"><br>
        <div class="row mt-6" id="conteiner_img">
        <div class="col">
            <?php
                if($result_img->num_rows > 0){
                    $img = $result_img->fetch_assoc();
            ?>
                <form method="POST" action="../Backend/act_mst_calendar_delet.php">
                </form>
                <div class="text-center">
                    <img src="multimedia/calendario/<?php echo $img['img_name'];?>" class="img-fluid" alt="Responsive image">
                </div>
            <?php
                }
            ?>
        </div>
        </div>  
    </div>

</body>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
</html>