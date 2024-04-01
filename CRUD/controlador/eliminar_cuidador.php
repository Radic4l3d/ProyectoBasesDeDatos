<?php
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $sql=$conexion->query("delete from cuidadores where id=$id ");

        if($sql == 1){
            //echo "elimando correctamente";
        }else{
            echo "error al borrar";
        }
    }
?>