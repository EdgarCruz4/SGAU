<?php
    include "Connection.php";
    include "Post.php";
    error_reporting(0);
    session_start();

    $act_titulo =$_POST['act_titulo'];
    $act_finicio =$_POST['act_finicio'];
    $act_ffin =$_POST['act_ffin'];
    $act_dscrp =$_POST['act_dscrp'];
    $act_url =$_POST['act_url'];
    $act_img =$_POST['act_img'];
    $img_format = array("png", "jpg", "gif");
    $booleano = True;

 //Information sanitize
    $C_act_titulo = filter_var($act_img, FILTER_SANITIZE_STRING);    
    $C_act_finicio = filter_var($act_finicio, FILTER_SANITIZE_NUMBER_INT);
    $C_act_ffin = filter_var($act_ffin, FILTER_SANITIZE_NUMBER_INT);
    $C_act_dscrp = filter_var($act_dscrp, FILTER_SANITIZE_STRING);
    $C_act_url = filter_var($act_url, FILTER_SANITIZE_URL);
    
    foreach($img_format as $valor){
        if(!(strpos($act_img, $valor))){
            $booleano = False;
        }
        else{
            echo "bien";
            break;
        }
    }
    if($booleano === False){
        header("location:../Frontend/act_mst_insert.php");
    }


    /*$query="INSERT INTO `act_mst` (`act_titulo`, `act_finicio`, `act_ffin`, `act_dscrp`, `act_url`, `act_img`, `act_dcnt_id`) 
    VALUES ('$C_act_titulo', '$C_act_finicio', '$C_act_ffin', '$C_act_dscrp', '$C_act_url', '$C_act_img', '1');

    */
    
?>