<?php
        include "Connection.php";
        include "Post.php";
        error_reporting(0);
        session_start();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $enrollment = $_POST['enrollment'];
        $password = $_POST['password'];
        
        /*if (!preg_match("/^[a-zA-Z]+/", $nombre)) {
                $errores[] = "Sólo se permiten letras como nombre de usuario <br>";
        }*/

        $query="SELECT * FROM usu_mst WHERE usu_mtrcl='$enrollment' AND usu_email='$email'";
        $result = mysqli_query($conexion, $query);

        if(!$result->num_rows > 0){
               $query="INSERT INTO usu_mst (usu_nom, usu_mtrcl, usu_email, usu_cnt )
               VALUE ('$name', '$enrollment', '$email', '$password')";
               $result = mysqli_query($conexion, $query);
               if(isset($result))
               {
                        //echo echo "<script>alert('Insertado correctamente')</script>";
                        header("location:../Frontend/Sing_in.php");
               }
               else
               {
                        //echo echo "<script>alert('Hay un error A')</script>";
                        header("location:../Frontend/Sing_up.php");
               }
        }
        else {
                //echo echo "<script>alert('Hay un error B')</script>";
                header("location:../Frontend/Sing_up.php");
        }
?>