<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) && !empty($_POST["razon_social"]) && !empty($_POST["tipo_contrato"]) && !empty($_POST["telefono"]) && !empty($_POST["correo"]) && !empty($_POST["rfc"]) && !empty($_POST["contacto"]) && !empty($_POST["mail_contacto"]) && !empty($_POST["telefono_contacto"])){
        $nombre = $_POST["nombre"];
        $rznSocial = $_POST["razon_social"];
        $tipo_contrato = $_POST["tipo_contrato"];
        $telefono = $_POST["telefono"];
        $emailE = $_POST["correo"];
        $rfc = $_POST["rfc"];
        $contacto = $_POST["contacto"];
        $emailC = $_POST["mail_contacto"];
        $telefonoC = $_POST["telefono_contacto"];

        $sql = $conexion->query("INSERT INTO tbl_empresas (nombre, razon_social, tipo_contrato, telefono, correo, rfc, contacto, mail_contacto, telefono_contacto) VALUES ('$nombre', '$rznSocial', '$tipo_contrato', '$telefono', '$emailE', '$rfc', '$contacto', '$emailC', '$telefonoC')");

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