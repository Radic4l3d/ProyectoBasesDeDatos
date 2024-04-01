<?php
    if(!empty($_GET["id"])){
        $ID = $_GET["id"];
        $sql=$conexion->query(" delete from tbl_cuidadores where id=$ID ");

        if($sql == 1){
            echo "elimando correctamente";
        }else{
            echo "error al borrar";
        }
    }
?>