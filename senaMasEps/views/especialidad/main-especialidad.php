
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <form action="<?php echo "index.php?controller=Especialidad&action=create"; ?>" method="post">
                <h2>Añadir Especialidad</h2>
                <hr />
                <div class="form-group">
                    <label for="txtCodigo">Codigo: </label>
                    <input type="number" class="form-control" id="txtCodigo" name="txtCodigo" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="">
                </div>
                <div class="form-group">
                    <label for="txtDescripcion">Descripcion: </label>
                    <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" placeholder="">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success mt-3 mb-5">Guardar</button>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
            <div>
                <h2>Especialidades</h2>
                <hr />
            </div>

            <div class="bd-example" id="tabla2">
                
                <table class="table table-dark table-striped table-hover justify-content-center align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col" class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($allEspecialidades)) {
                            foreach ($allEspecialidades as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                                <tr>

                                    <th><?php echo $row->codigo; ?></th>
                                    <td><?php echo $row->nombre; ?></td>
                                    <td><?php echo $row->descripcion; ?></td>
                                    <td class="text-center">

                                        <!-- echo"index.php?controller=Paciente&action=editar&codigo="  esto es pa cuando se quiera guardar el editado-->
                                        <a href="<?php echo "index.php?controller=Especialidad&action=editar&codigo=" . $row->codigo; ?>" class="btn btn-warning">Editar</a>
                                        <a href="<?php echo "index.php?controller=Especialidad&action=borrar&codigo=" . $row->codigo; ?>" class="btn btn-danger">Borrar</a>
                                        <a href="<?php echo "index.php?controller=Especialidad&action=visualizar&codigo=" . $row->codigo; ?>" class="btn btn-success">Visualizar</a>
                                    </td>

                                </tr>

                        <?php
                            }
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>