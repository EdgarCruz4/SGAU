<?php
        include "Connection.php";
        include "Post.php";
        error_reporting(0);
        session_start();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $enrollment = $_POST['enrollment'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        if($password1 == $password2)
        {       
               //Information sanitize
                $C_name = filter_var($name, FILTER_SANITIZE_STRING);
                $C_email = filter_var($email, FILTER_SANITIZE_STRING);
                $C_enrollment = filter_var($enrollment, FILTER_SANITIZE_NUMBER_INT);
                $C_password = filter_var($password1, FILTER_SANITIZE_STRING);
                //Create of hash
                echo $hash = md5($C_password);


                $query="SELECT * FROM usu_mst WHERE usu_mtrcl='$C_enrollment' AND usu_email='$C_email'";
                $result = mysqli_query($conexion, $query);


                if(!$result->num_rows > 0){
                $query="INSERT INTO usu_mst (usu_nom, usu_mtrcl, usu_email, usu_cnt )
                VALUE ('$C_name', '$C_enrollment', '$C_email', '$hash')";
                $result = mysqli_query($conexion, $query);
                if(isset($result))
                {
                        //echo echo "<script>alert('Insertado correctamente')</script>";
                        header("location:../Frontend/Sing_in_almn.php");
                }
                else
                {
                        //"<script>alert('Hay un error')</script>";
                        header("location:../Frontend/Sing_up.php");
                }
                }
                else {
                        //echo "<script>alert('Hay un error')</script>";
                        header("location:../Frontend/Sing_up.php");
                }
        }
        else
        {       
                header("location:../Frontend/Sing_up.php");
        }
?>