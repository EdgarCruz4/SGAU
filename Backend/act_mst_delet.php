<?php
    include "connection.php";
    include "post.php";
    error_reporting(0);
    session_start();
    
    $act_id = $_POST['act_id'];

    $query = "SELECT * FROM act_mst WHERE act_id = '$act_id'";
    $result = mysqli_query($conexion,$query);

    if(isset($result)){
        //remove image from folder
        $act = $result->fetch_assoc();

        $ruta_save = '../Frontend/multimedia/';
        $name_img = $act['act_img'];
        echo $add = $ruta_save.$name_img;

        echo $query2 = "DELETE FROM `act_mst` WHERE `act_id` = '$act_id'";
        echo $result2 = mysqli_query($conexion,$query2);

        if(isset($result2)){
            unlink($add);
            header("location:../Frontend/act_mst.php");
        }else{
            header("location:../Frontend/act_mst.php");
            //echo "mal"
        }
    }else{
        header("location:../Frontend/act_mst.php");
        //echo 'mal2';
    }
?>