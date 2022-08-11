<?php
    class crrera_mst
    {
        function get_crrera($route){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM crrera_mst WHERE crrera_dscrip != 'Cultural y deportivo';";
            $result = $conexion->query($query);
            return $result;
        }
        function get_crrera_std($route, $crrera_id){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM `crrera_mst`, act_mst, dcnt_mst WHERE crrera_id IN ('$crrera_id',7) AND crrera_id = dcnt_crrera_id AND dcnt_id = act_dcnt_id 
            ORDER BY act_finicio ;";
            $result = $conexion->query($query);
            return $result;
        }

    }
?>