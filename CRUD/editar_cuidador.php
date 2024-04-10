<?php
include "modelo/conexion.php";
$ID = $_GET["id"];

$sql = $conexion->query("SELECT * FROM tbl_empresas WHERE id=$ID ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Editar Cuidadores</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">

        <?php
        include "controlador/editar_cuidador.php";

        while($datos = $sql->fetch_object()){ ?>
            <div class="mb-3">
                <label for="nombreC" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombreC" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="apellidoPC" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellidoPC" value="<?= $datos->apellidoP ?>">
            </div>
            <div class="mb-3">
                <label for="apellidoMC" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="apellidoMC" value="<?= $datos->apellidoM ?>">
            </div>
            <div class="mb-3">
                <label for="tipoCuidador" class="form-label">Tipo de Cuidador</label>
                <select class="form-select" name="tipoCuidador">
                    <option value="Adultos" <?= ($datos->tipo_cuidador == 'Adultos') ? 'selected' : '' ?>>Adultos</option>
                    <option value="Niños" <?= ($datos->tipo_cuidador == 'Niños') ? 'selected' : '' ?>>Niños</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telefonoC" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefonoC" value="<?= $datos->telefono ?>">
            </div>
            <div class="mb-3">
                <label for="emailC" class="form-label">Email</label>
                <input type="email" class="form-control" name="emailC" value="<?= $datos->email ?>">
            </div>

            <div class="mb-3">
                <label for="tipoCuidador" class="form-label">Horario</label>
                <select class="form-select" name="horarioC">
                    <option value="Matutino" <?= ($datos->horario == 'Matutino') ? 'selected' : '' ?>>Matutino</option>
                    <option value="Vespertino" <?= ($datos->horario == 'Vespertino') ? 'selected' : '' ?>>Vespertino</option>
                    <option value="Nocturno" <?= ($datos->horario == 'Nocturno') ? 'selected' : '' ?>>Nocturno</option>
                </select>
            </div>            
            <div class="mb-3">
                <label for="rfcC" class="form-label">RFC</label>
                <input type="text" class="form-control" name="rfcC" value="<?= $datos->rfc ?>">
            </div>
            <div class="mb-3">
                <label for="nominaC" class="form-label">Nómina</label>
                <input type="text" class="form-control" name="nominaC" value="<?= $datos->nomina ?>">
            </div>
        <?php } ?>

        <button type="submit" class="btn btn-primary" name="btnEditar" value="ok">Enviar datos</button>
    </form>
</body>
</html>


