<?php
if(!empty($_POST["btnEditar"])){
    if(!empty($_POST["nombreC"]) && !empty($_POST["rfcC"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombreC"];
        $rfc = $_POST["rfcC"];
        $tipoCuidador = $_POST["tipoCuidador"]; // Nuevo campo

        // Actualiza el registro en la base de datos
        $sql = $conexion->query("UPDATE cuidadores SET nombre='$nombre', rfc='$rfc', tipo_cuidador='$tipoCuidador' WHERE id=$id");

        if($sql == 1){
            echo '<script>window.location.href = "index.php";</script>'; // Redirige a la página principal
        }else{
            echo "ERROR al actualizar en la base de datos";
        }
    }else{
        echo "Campos vacíos";
    }
}
?>
