<?php
    include "connection.php";
    include "post.php";
    
    //variables to save the image
    $format_img = array("image/jpg", "image/jpeg", "image/png", "image/gif");
    $ruta_save = '../Frontend/multimedia/calendario/';
    $name_img = $_FILES["calendar"]["name"];
    $tmp_img = $_FILES["calendar"]["tmp_name"];
    $add = $ruta_save.$name_img;
    $max_kb = 200;

    //save image in our directory
    if($_FILES["calendar"]["error"]>0){
        //error loading file
    }
    else{
        if(in_array($_FILES["calendar"]["type"], $format_img) && $_FILES["calendar"]["size"]<= ($max_kb * 1024)){
            if(!file_exists($add)){
                if(move_uploaded_file($tmp_img, $add)){
                    //Save the information in the DB
                    $query="INSERT INTO `img_mst` (`img_id`, `img_name`) VALUES ('1', '$name_img');";
                }
            }else{
                echo "archivo ya existente";
            }
        }
        else{
            echo 'file not allowed';
        }
    }
    $result = mysqli_query($conexion, $query);
    if(isset($result)){
        header("location:../Frontend/act_mst_calendar_std.php");
    }  
    else{
        echo "<spant>No hay imagen para mostrar</spant>";
    }
?>