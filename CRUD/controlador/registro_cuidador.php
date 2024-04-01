<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombreC"]) && !empty($_POST["rfcC"]) && !empty($_POST["tipoCuidador"])){
        $nombre = $_POST["nombreC"];
        $rfc = $_POST["rfcC"];
        $tipoCuidador = $_POST["tipoCuidador"];

        // Realiza la inserción en la base de datos
        $sql = $conexion->query("INSERT INTO cuidadores (nombre, rfc, tipo_cuidador) VALUES ('$nombre', '$rfc', '$tipoCuidador')");

        if($sql){
            echo "ÉXITO";
        }else{
            echo "ERROR al insertar en la base de datos";
        }
    }else{
        echo "Falta algún campo";
    }
}
?>
