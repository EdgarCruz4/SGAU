<?php
    session_start();
    if(isset($_SESSION['user_crdncial'])){
        $user_crdncial = $_SESSION['user_crdncial'];
        $n_str = strlen($user_crdncial);
        if($n_str == 7){
            header("location: Frontend/act_mst_std.php");
        }elseif($n_str == 13){
            header("location: Frontend/act_mst.php");
        }
    }else{
        include_once 'Frontend/home.php';
    }
?>