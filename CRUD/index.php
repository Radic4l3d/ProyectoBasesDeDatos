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
    <h1 class="text-center p-3">Cuidadores a domicilio</h1>

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
                <label for="exampleInputEmail1" class="form-label">RFC</label>
                <input type="text" class="form-control" name="rfcC">
            </div>
            <div class="mb-3">
                <label for="tipoCuidador" class="form-label">Tipo de Cuidador</label>
                <select class="form-select" name="tipoCuidador">
                    <option value="Adultos">Adultos</option>
                    <option value="Niños">Niños</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th scope="col">Nombre</th>
                        <th scope="col">RFC</th>
                        <th scope="col">Tipo de Cuidador</th> <!-- Nueva columna -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from cuidadores");
                    while($datos=$sql->fetch_object()){ ?>
                        <tr>
                            
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->rfc ?></td>
                            <td><?= $datos->tipo_cuidador ?></td> <!-- Mostrar el tipo de cuidador -->
                            <td>
                                <a href="editar_cuidador.php?id=<?= $datos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="index.php?id=<?= $datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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
