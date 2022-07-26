<?php
    require '../Backend/scripts/act_mst.php';
    $act_mst = new act_mst();

    $route = '../';
    $act_id = $_POST['act_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Act. Universitarias</title>
</head>
<body>
    <!--Start side menu-->
    <nav id="sidebar">
        <?php 
            include_once 'menu.php';
            $today = date("Y-m-d");
        ?>
    </nav>
    <!--End of side menu-->
    <!--Start of contento-->
    <main>
        <div class="row">
            <div class="col">
                <span align="center">
                    <h2 class="font-weight-bold">Editar evento</h2>
                </span>
                <span class="float-right">
                    <a href="act_mst.php" class="btn btn-secondary btn-lg"><i class="fa-solid fa-circle-arrow-left"></i></a>
                </span>
            </div>
        </div>
    </main>

    <main>
        <div class="col">
            <form novalidate method="POST" enctype="multipart/form-data" action="../Backend/act_mst_edit.php">
                <?php
                    $result_act = $act_mst->get_act_edit($act_id,$route);
                    $act = $result_act->fetch_assoc();
                ?>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col">
                        <label>Titulo</label>
                        <input type="text" name="act_titulo" class="form-control" value="<?php echo $act['act_titulo'];?>" placeholder="Titulo de la actividad a registrar" disabled>
                        <input type="hidden" name="act_id" value="<?php echo $act['act_id'];?>">
                    </div>
                    <div class="col-sm-3">
                        <label>Inicio de Act.</label>
                        <input type="datetime-local" name="act_finicio" class="form-control" value="<?php echo $act['act_finicio'];?>" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Fin de Act.</label>
                        <input type="datetime-local" name="act_ffin" class="form-control" value="<?php echo $act['act_ffin'];?>" required>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col-sm-1"></div>
                    <div class="col">
                        <label>Descripción</label>
                        <textarea class="form-control" name="act_dscrp" rows="3" placeholder="Descripción de la actividad"><?php echo $act['act_dscrp'];?></textarea>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <label>URL</label>
                        <input type="text" name="act_url" class="form-control" value="<?php echo $act['act_url'];?>"  placeholder="Agregar una URL solo si es necesario">
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-1"></div>
                        <div class="col">
                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                        </div>
                    <div class="col-sm-1"></div>
                </div>
            </form>
        </div>
    </main>  
    <!--End of contento-->
</body>
</html>