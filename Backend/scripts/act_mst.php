<?php
    class act_mst
    {
        function get_act($route){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM act_mst;";
            $result = $conexion->query($query);
            return $result;
        }
        function get_act_career($route,$usu_crrera_id){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM act_mst WHERE act_crrera_id = '$usu_crrera_id' AND act_crrera_id = '7';";
            $result = $conexion->query($query);
            return $result;
        }
    }
?>