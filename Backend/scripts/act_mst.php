<?php
    class act_mst
    {
        public function get_act($route){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM act_mst;";
            $result = $conexion->query($query);
            return $result;
        }
        /*Revisar funcion es posible que se pueda eliminar */
        public function get_act_career($route,$usu_crrera_id){
            require $route.'Backend/connection.php';
            $query = "SELECT * FROM act_mst WHERE act_crrera_id = '$usu_crrera_id' AND act_crrera_id = '7';";
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