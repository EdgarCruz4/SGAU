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
            $today = date("Y-m-d");
        ?>
    </nav>
    <!--End of side menu-->
    <!--Start of contento-->
    <main>
        <div class="row">
            <div class="col">
                <span align="center">
                    <h2 class="font-weight-bold">Agregar evento</h2>
                </span>
                <span class="float-right">
                    <a href="act_mst.php" class="btn btn-secondary btn-lg"><i class="fa-solid fa-circle-arrow-left"></i></a>
                </span>
            </div>
        </div>
    </main>

    <main>
        <div class="col">
            <form novalidate method="POST" enctype="multipart/form-data" action="../Backend/act_mst_insert.php">

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col">
                        <label>Titulo</label>
                        <input type="text" name="act_titulo" class="form-control" placeholder="Titulo de la actividad a registrar" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Inicio de Act.</label>
                        <input type="date" name="act_finicio" class="form-control" value="<?php echo $today;?>" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Fin de Act.</label>
                        <input type="date" name="act_ffin" class="form-control" value="<?php echo $today;?>" required>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br>

                <div class="form-row">
                    <div class="col-sm-1"></div>
                    <div class="col">
                        <label>Descripción</label>
                        <textarea class="form-control" name="act_dscrp" rows="3" placeholder="Descripción de la actividad"></textarea>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col">
                        <label>URL</label>
                        <input type="text" name="act_url" class="form-control" placeholder="Agregar una URL solo si es necesario">
                    </div>
                    <div class="col">
                        <label>Imagen ilustrativa</label>
                        <input type="file" name="act_img" class="form-control-file" accept="image/*" required>
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