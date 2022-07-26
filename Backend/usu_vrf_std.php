<?php
    include "connection.php";
    include "post.php";
    error_reporting(0);
    session_start();

    $enrollment = $_POST['enrollment'];
    $password = $_POST['password'];
    //Information sanitize
    $c_password = filter_var($password, FILTER_SANITIZE_STRING);
    $c_enrollment = filter_var($enrollment, FILTER_SANITIZE_NUMBER_INT);
    //Crate of hash
    $hash = md5($c_password);

    $query="SELECT * FROM usu_mst WHERE usu_mtrcl = '$c_enrollment' AND usu_cnt = '$hash'";
    $result = mysqli_query($conexion, $query);

    $user = $result->fetch_assoc();
    $user_name = $user['usu_nom'];
    $user_crrera = $user['usu_crrera_id'];
    $user_mtrcl = $user['usu_mtrcl'];
        
    if(!$result->num_rows > 0){
        //result found
        header("location:../Frontend/Sing_in_almn.php");
    }
    else {
        //No result found 
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_crrera'] = $user_crrera;
        $_SESSION['user_crdncial'] = $user_mtrcl;
        header("location:../Frontend/act_mst_std.php");
    }
    
?>