<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c9d58f624f.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">Empresas</h1>

    <?php
        include "modelo/conexion.php";
        include "controlador/eliminar_empresas.php";
    ?>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro Empresas</h3>
            <?php
                include "modelo/conexion.php";
                include "controlador/registro_cuidador.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Empresa</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Razon social</label>
                <input type="text" class="form-control" name="razon_social">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo de contrato</label>
                <select class="form-select" name="tipo_contrato">
                    <option value="Indefinido">Indefinido</option>
                    <option value="Temporal">Temporal</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">RFC</label>
                <input type="text" class="form-control" name="rfc">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contacto</label>
                <input type="text" class="form-control" name="contacto">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email contacto</label>
                <input type="text" class="form-control" name="mail_contacto">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono contacto</label>
                <input type="text" class="form-control" name="telefono_contacto">
            </div>
        
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre Empresa</th>
                        <th scope="col">Razon social</th>
                        <th scope="col">tipo contrato</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                        <th scope="col">RFC</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Mail contacto</th>
                        <th scope="col">Telefono contacto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from tbl_empresas");
                    while($datos=$sql->fetch_object()){ ?>
                        <tr>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->razon_social ?></td>
                            <td><?= $datos->tipo_contrato ?></td>
                            <td><?= $datos->telefono ?></td>
                            <td><?= $datos->correo ?></td>
                            <td><?= $datos->rfc ?></td>
                            <td><?= $datos->contacto ?></td>
                            <td><?= $datos->mail_contacto ?></td>
                            <td><?= $datos->telefono_contacto ?></td>
                            <td>
                                <a href="editar_empresas.php?id=<?= $datos->id_empresa?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="indexEmpresas.php?id=<?= $datos->id_empresa?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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
