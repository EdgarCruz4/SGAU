<?php
    include "connection.php";
    include "post.php";
    error_reporting(0);
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $enrollment = $_POST['enrollment'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $student_career = $_POST['student_career'];

    if($password1 == $password2)
        {       
            //Information sanitize
            $C_name = filter_var($name, FILTER_SANITIZE_STRING);
            $C_email = filter_var($email, FILTER_SANITIZE_STRING);
            $C_enrollment = filter_var($enrollment, FILTER_SANITIZE_NUMBER_INT);
            $C_password = filter_var($password1, FILTER_SANITIZE_STRING);
            $C_student_career = filter_var($student_career, FILTER_SANITIZE_NUMBER_INT);
            //Create of hash
            $hash = md5($C_password);

            //It is verified if there is not a registration and an email in the database with the same characteristics
            $query="SELECT * FROM usu_mst WHERE usu_mtrcl='$C_enrollment' AND usu_email='$C_email'";
            $result = mysqli_query($conexion, $query);


            if(!$result->num_rows > 0){
            $query="INSERT INTO usu_mst (usu_nom, usu_mtrcl, usu_email, usu_cnt, usu_crrera_id)
            VALUE ('$C_name', '$C_enrollment', '$C_email', '$hash', '$C_student_career')";
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