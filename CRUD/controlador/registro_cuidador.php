<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombreC"]) && !empty($_POST["rfcC"]) && !empty($_POST["tipoCuidador"]) && !empty($_POST["apellidoPC"]) && !empty($_POST["apellidoMC"]) && !empty($_POST["telefonoC"]) && !empty($_POST["emailC"]) && !empty($_POST["horarioC"]) && !empty($_POST["nominaC"])){
        $nombre = $_POST["nombreC"];
        $apellidoP = $_POST["apellidoPC"];
        $apellidoM = $_POST["apellidoMC"];
        $tipo_cuidador = $_POST["tipoCuidador"];
        $telefono = $_POST["telefonoC"];
        $email = $_POST["emailC"];
        $horario = $_POST["horarioC"];
        $rfc = $_POST["rfcC"];
        $nomina = $_POST["nominaC"];

        $sql = $conexion->query("INSERT INTO tbl_cuidadores (nombre, apellidoP, apellidoM, tipo_cuidador, telefono, email, horario, rfc, nomina) VALUES ('$nombre', '$apellidoP', '$apellidoM', '$tipo_cuidador', '$telefono', '$email', '$horario', '$rfc', '$nomina')");

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
