<?php
    class user_mst
    {
        public function session_star_menu(){
            session_start();
            $user_name = $_SESSION['user_name'];
            $user_crdncial = $_SESSION['user_crdncial'];
            if(!isset($user_name) && !isset($user_crdncial)){
                header("location: ../../index.php");
            }
            else{
                return $n_str = strlen($user_crdncial); 
            }
        }
    }
?>