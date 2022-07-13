<?php
    class crrera_mst
    {
        function get_crrera($route){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM crrera_mst WHERE crrera_dscrip != 'Cultural y deportivo';";
            $result = $conexion->query($query);
            return $result;
        }
    }
?>