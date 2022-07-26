<?php
    include "connection.php";
    include "post.php";
    error_reporting(0);
    session_start();

    $usu_crrera_id = $_SESSION['user_crrera'];
    $act_titulo = $_POST['act_titulo'];
    $act_finicio = $_POST['act_finicio'];
    $act_ffin = $_POST['act_ffin'];
    $act_dscrp = $_POST['act_dscrp'];
    $act_url = $_POST['act_url'];

    //variables to save the image
    $format_img = array("image/jpg", "image/jpeg", "image/png", "image/gif");
    $ruta_save = '../Frontend/multimedia/';
    $name_img = $_FILES["act_img"]["name"];
    $tmp_img = $_FILES["act_img"]["tmp_name"];
    $add = $ruta_save.$name_img;
    $max_kb = 200;

    //Information sanitize
    $C_act_titulo = filter_var($act_titulo, FILTER_SANITIZE_STRING);
    $C_act_dscrp = filter_var($act_dscrp, FILTER_SANITIZE_STRING);
    $C_act_url = filter_var($act_url, FILTER_SANITIZE_URL);

    //save image in our directory
    if($_FILES["act_img"]["error"]>0){
        header("location:../Frontend/act_mst_insert.php");
        //error loading file
    }
    else{
        if(in_array($_FILES["act_img"]["type"], $format_img) && $_FILES["act_img"]["size"]<= ($max_kb * 1024)){
            if(!file_exists($add)){
                if(move_uploaded_file($tmp_img, $add)){
                    //Save the information in the DB
                    $query="INSERT INTO `act_mst` (`act_titulo`, `act_finicio`, `act_ffin`, `act_dscrp`, `act_url`, `act_img`, `act_dcnt_id`) 
                    VALUES ('$C_act_titulo', '$act_finicio', '$act_ffin', '$C_act_dscrp', '$C_act_url', '$name_img', '$usu_crrera_id');";
                }
            }else{
                //echo "archivo ya existente";
                header("location:../Frontend/act_mst_insert.php");
            }
        }
        else{
            header("location:../Frontend/act_mst_insert.php");
            //file not allowed
        }
    }
        
    $result = mysqli_query($conexion, $query);
    if(isset($result)){
        header("location:../Frontend/act_mst.php");
    }  
    else{
        header("location:../Frontend/act_mst_insert.php");
    }

    

    
?>