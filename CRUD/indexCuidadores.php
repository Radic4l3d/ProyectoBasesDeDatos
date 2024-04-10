<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuidadores a domicilio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c9d58f624f.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">Cuidadores</h1>

    <?php
        include "modelo/conexion.php";
        include "controlador/eliminar_cuidador.php";
    ?>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro Cuidadores</h3>
            <?php
                include "modelo/conexion.php";
                include "controlador/registro_cuidador.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombreC">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellidoPC">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="apellidoMC">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo de Cuidador</label>
                <select class="form-select" name="tipoCuidador">
                    <option value="Adultos">Adultos</option>
                    <option value="Niños">Niños</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefonoC">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="emailC">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Horario</label>
                <select class="form-select" name="horarioC">
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                    <option value="Nocturno">Nocturno</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">RFC</label>
                <input type="text" class="form-control" name="rfcC">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nómina</label>
                <input type="text" class="form-control" name="nominaC">
            </div>
        
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Tipo de Cuidador</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Horario</th>
                        <th scope="col">RFC</th>
                        <th scope="col">Nómina</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from tbl_cuidadores");
                    while($datos=$sql->fetch_object()){ ?>
                        <tr>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellidoP ?></td>
                            <td><?= $datos->apellidoM ?></td>
                            <td><?= $datos->tipo_cuidador ?></td>
                            <td><?= $datos->telefono ?></td>
                            <td><?= $datos->email ?></td>
                            <td><?= $datos->horario ?></td>
                            <td><?= $datos->rfc ?></td>
                            <td><?= $datos->nomina ?></td>
                            <td>
                                <a href="editar_cuidador.php?id=<?= $datos->ID?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="indexCuidadores.php?id=<?= $datos->ID?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>    
                    <?php }
                    ?>   
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
