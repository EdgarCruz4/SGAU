<?php
    class act_mst
    {
        public function get_act($route){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM act_mst;";
            $result = $conexion->query($query);
            return $result;
        }
        public function get_act_career($route,$user_crdncial){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM act_mst, dcnt_mst WHERE dcnt_nfc = '$user_crdncial' AND act_dcnt_id = dcnt_id ORDER BY act_finicio;";
            $result = $conexion->query($query);
            return $result;
        }
        public function get_act_edit($act_id,$route){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM act_mst WHERE act_id = '$act_id';";
            $result = $conexion->query($query);
            return $result;
        }
        public function get_img($route){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM img_mst WHERE img_id = '1';";
            $result = $conexion->query($query);
            return $result;
        }
    }
?>