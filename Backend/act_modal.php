<?php
    include "connection.php";

    $act_id = $_POST['act_id'];

    $query = "SELECT * FROM act_mst WHERE act_id = '$act_id'";
    $result = mysqli_query($conexion,$query);

    if(isset($result)){
        $act = $result->fetch_assoc();
        ?>
            <link rel="stylesheet" href="../Frontend/css/modal.css">
            <div class="modal-header">
                <h5><b><?php echo $act['act_titulo'];?></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                <div class="row">
                    <div class="col">
                        <p style="text-align: justify;"><?php echo $act['act_dscrp']?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label><b>Inicio de la actividad:</b></label>
                        <?php echo $act['act_finicio'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label><b>Fin de la actividad:</b></label>
                        <?php echo $act['act_ffin'];?>
                    </div>
                </div>
                <?php 
                    if($act['act_url'] != null){
                ?>
                <div class="row">
                    <div class="col mt-4">
                        <a href="<?php echo $act['act_url'];?>">Link de acceso</a>
                    </div>
                </div>
                <?php 
                    }
                    if($act['act_email'] != null){
                ?>
                <div class="row">
                    <div class="col mt-4">
                        <label><b>Correo electronico:</b></label>
                        <?php echo $act['act_email'];?>
                    </div>
                </div>
                <?php 
                    }
                ?>
                <div class="row">
                    <div class="col mt-4">
                        <img class="img-fluid rounded" alt="Responsive image" src="multimedia/<?php echo $act['act_img'];?>">
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar</button>
            </div>

        <?php
    }
?>