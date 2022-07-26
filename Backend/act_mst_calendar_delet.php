<?php
    include "connection.php";
    include "post.php";
    error_reporting(0);
    session_start();
    
    $img_name = $_POST['img_name'];
    
    $query = "DELETE FROM `img_mst` WHERE `img_name` = '$img_name'";
    $result = mysqli_query($conexion,$query);

    if(isset($result)){

        //remove image from folder
        $ruta_save = '../Frontend/multimedia/calendario/';
        $add = $ruta_save.$img_name;
        unlink($add);

        header("location:../Frontend/act_mst_calendar_std.php");

    }else{
        echo "error";
    }
?>