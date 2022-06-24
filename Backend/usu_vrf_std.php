<?php
    include "Connection.php";
    include "Post.php";
    error_reporting(0);
    session_start();

    $password = $_POST['password'];
    $enrollment = $_POST['enrollment'];
    //Information sanitize
    $c_password = filter_var($password, FILTER_SANITIZE_STRING);
    $c_enrollment = filter_var($enrollment, FILTER_SANITIZE_NUMBER_INT).'<br>';
    //Crate of hash
    $hash = md5($c_enrollment).'<br>';

    $query="SELECT * FROM usu_mst WHERE usu_mtrcl = '$c_enrollment' AND usu_cnt = '$hash'";
    $result = mysqli_query($conexion, $query);

    if($query == 0){
        //result found
        header("location:../Frontend/Sing_in_almn.php");
    }
    else {
        //No result found 
        header("location:../Frontend/menu.php");
    }
    
?>