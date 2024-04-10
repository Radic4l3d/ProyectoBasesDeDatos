<?php
if(!empty($_POST["btnEditar"])){
    if(!empty($_POST["nombreC"]) && !empty($_POST["apellidoPC"]) && !empty($_POST["apellidoMC"]) && !empty($_POST["tipoCuidador"]) && !empty($_POST["telefonoC"]) && !empty($_POST["emailC"]) && !empty($_POST["horarioC"]) && !empty($_POST["rfcC"]) && !empty($_POST["nominaC"])){
        $ID = $_POST["id"];
        $nombre = $_POST["nombreC"];
        $apellidoP = $_POST["apellidoPC"];
        $apellidoM = $_POST["apellidoMC"];
        $tipo_cuidador = $_POST["tipoCuidador"];
        $telefono = $_POST["telefonoC"];
        $email = $_POST["emailC"];
        $horario = $_POST["horarioC"];
        $rfc = $_POST["rfcC"];
        $nomina = $_POST["nominaC"];

        $sql = $conexion->query("UPDATE tbl_cuidadores SET nombre='$nombre', apellidoP='$apellidoP', apellidoM='$apellidoM', tipo_cuidador='$tipo_cuidador', telefono='$telefono', email='$email', horario='$horario', rfc='$rfc', nomina='$nomina' WHERE ID=$ID");

        if($sql == 1){
            echo '<script>window.location.href = "indexCuidadores.php";</script>'; // Redirige a la página principal
        }else{
            echo "ERROR al actualizar en la base de datos";
        }
    }else{
        echo "Campos vacíos";
    }
}
?>

