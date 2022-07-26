<?php
    include 'connection.php';
    include 'post.php';
    session_start();

    $act_id = $_POST['act_id'];
    $act_finicio = $_POST['act_finicio'];
    $act_ffin = $_POST['act_ffin'];
    $act_dscrp = $_POST['act_dscrp'];
    $act_url = $_POST['act_url'];

    //Information sanitize
    $C_act_id = filter_var($act_id, FILTER_SANITIZE_NUMBER_INT);
    $C_act_dscrp = filter_var($act_dscrp, FILTER_SANITIZE_STRING);
    $C_act_url = filter_var($act_url, FILTER_SANITIZE_URL);

    $query = "UPDATE `act_mst` SET `act_finicio` = '$act_finicio', `act_ffin` = '$act_ffin', `act_dscrp` = '$C_act_dscrp', `act_url` = '$C_act_url' 
    WHERE `act_id` = '$C_act_id';";
    $result = mysqli_query($conexion,$query); 

    if(isset($result)){
        header("location:../Frontend/act_mst.php");
    }  
    else{
        header("location:../Frontend/act_mst_edit.php");
    }

?>