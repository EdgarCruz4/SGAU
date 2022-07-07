<?php
    class act_mst
    {
        function get_act($route){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM act_mst;";
            $result = $conexion->query($query);
            return $result;
        }
    }
?>