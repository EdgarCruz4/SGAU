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
                    <h2 class="font-weight-bold">Editar Calendario Escolar</h2>
                </span>
                <span class="float-right">
                    <!-- Button to Open the Modal -->
                    <?php
                        if($result_img->num_rows == 0){
                    ?>
                    <a href="act_mst_insert.php" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa-solid fa-plus"></i></a>
                    <?php
                        }
                    ?>
                </span>
            </div>
        </div>
    </main>
    
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Calendario Escolar</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" enctype="multipart/form-data" action="../Backend/save_clndar.php">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <input type="file" name="calendar" class="calendar" id="calendar" accept="image/*" required>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="save"><i class="fa-solid fa-floppy-disk"></i></i> Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-solid fa-arrow-right-from-bracket"></i> Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Conteiner-->
    <div class="container"><br>
        <div class="row mt-6" id="conteiner_img">
        <div class="col">
            <?php
                if($result_img->num_rows > 0){
                    $img = $result_img->fetch_assoc();
            ?>
                <form method="POST" action="../Backend/act_mst_calendar_delet.php">
                    <input type="hidden" name="img_name" value="<?php echo $img['img_name'];?>">
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
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