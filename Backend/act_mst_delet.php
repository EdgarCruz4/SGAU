<?php
    include "connection.php";
    include "post.php";
    error_reporting(0);
    session_start();
    
    $act_id = $_POST['act_id'];
    
    
    $query = "DELETE FROM `act_mst` WHERE `act_id` = '$act_id'";
    $result = mysqli_query($conexion,$query);

    if(isset($result)){

        //remove image from folder
        $query2 = "SELECT * FROM act_mst WHERE act_id = '$act_id'";
        $reuslt2 = mysqli_query($conexion,$query2);
        $act = $reuslt2->fetch_assoc();

        $ruta_save = '../Frontend/multimedia/';
        $name_img = $act['act_img'];
        $add = $ruta_save.$name_img;
        unlink($add);

        header("location:../Frontend/act_mst.php");

    }else{
        header("location:../Frontend/act_mst.php");
    }
?>