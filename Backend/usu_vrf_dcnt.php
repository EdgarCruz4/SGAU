<?php
    include "connection.php";
    include "post.php";
    error_reporting(0);
    session_start();

    $nfc = $_POST['enrollment'];
    echo $password = $_POST['password'];
    //Information sanitize
    $c_password = filter_var($password, FILTER_SANITIZE_STRING);
    $c_nfc = filter_var($nfc, FILTER_SANITIZE_STRING);
    //Crate of hash
    $hash = md5($c_password);

    echo $query="SELECT * FROM dcnt_mst WHERE dcnt_nfc = '$c_nfc' AND dcnt_cnt = '$hash'";
    $result = mysqli_query($conexion, $query);

    $user = $result->fetch_assoc();
    $user_name = $user['dcnt_nom'];
    $user_crrera = $user['dcnt_crrera_id'];
    $user_nfc = $user['dcnt_nfc'];
        
    if(!$result->num_rows > 0){
        //result found
        header("location:../Frontend/Sing_in_dcnt.php");
    }
    else {
        //No result found 
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_crrera'] = $user_crrera;
        $_SESSION['user_crdncial'] = $user_nfc;
        header("location:../Frontend/act_mst.php");
    }
    
?>